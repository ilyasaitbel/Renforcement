<?php
require_once 'models/Bien.php';
require_once 'models/Appartement.php';
require_once 'models/Maison.php';
require_once 'models/LocalCommercial.php';
require_once 'Agence.php';

// Création agence
$agence = new Agence('Immo Prestige', 7.5);

// Appartements
$app1 = new Appartement(1, 80, "Casa", 100000, 2, true, 300);
$app2 = new Appartement(2, 60, "Rabat", 80000, 1, false, 200);

// Maisons
$maison1 = new Maison(3, 120, "Marrakech", 200000, 5, true, 50);
$maison2 = new Maison(4, 90, "Agadir", 150000, 4, false, 0);

// Local commercial
$local = new LocalCommercial(5, 70, "Tanger", 120000, "Restaurant", 5000);

// Ajouter biens
$agence->ajouterBien($app1);
$agence->ajouterBien($app2);
$agence->ajouterBien($maison1);
$agence->ajouterBien($maison2);
$agence->ajouterBien($local);

// Tests
echo "Biens disponibles: " . count($agence->getBiensDisponibles()) . PHP_EOL;

echo "CA potentiel: " . $agence->calculerCa() . PHP_EOL;

$plusCher = $agence->getBienPlusCher();
if ($plusCher) {
    echo "Bien le plus cher: " . $plusCher->getDescription() . PHP_EOL;
}

echo "Biens entre 60 et 120 m²:" . PHP_EOL;
$filtre = $agence->filtrerParSurface(60, 120);

foreach ($filtre as $b) {
    echo $b->getDescription() . PHP_EOL;
}

echo "Statistiques:" . PHP_EOL;
var_dump($agence->getStatistiques());