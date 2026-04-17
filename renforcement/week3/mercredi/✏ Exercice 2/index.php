<?php

require_once 'Vehicule.php';
require_once 'Camionnette.php';
require_once 'Moto.php';
require_once 'Voiture.php';

$tesla = new Voiture('tesla b2','t390',2026,100000);

$harley = new Moto('Davidson Street Glide','nigen',2006,7000);

$fidex = new Camionnette('fidex','fidex2',2022,12000,90);

echo $tesla->getDescription();

echo $harley->getDescription();

echo $fidex->getDescription();

$v1 = new Voiture("Toyota", "Corolla", 2022, 20000);
$v2 = new Voiture("Dacia", "Logan", 2021, 15000);
$m1 = new Moto("Yamaha", "MT-07", 2023, 9000);
$c1 = new Camionnette("Ford", "Transit", 2020, 30000, 1200);

$catalogue = [
    $v1,
    $v2,
    $m1,
    $c1,
];

$total = 0;

foreach($catalogue as $ct){
    $total += $ct->getPrixFinal();
    echo $ct->getDescription();
}

$moyen = $total / count($catalogue);

echo "\n le moyen: " . $moyen;

$pluscher = Vehicule::getMostExpensive($catalogue);

echo "\n le plus Cher c'est " . $pluscher->getMarque() . "  prix: " . $pluscher->getPrixFinal();

echo "\n" . $v1->isRecent();

echo "\n" . $tesla->isRecent();