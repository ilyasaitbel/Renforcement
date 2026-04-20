<?php
require_once "models/Empruntable.php";
require_once "models/Document.php";
require_once "models/Bibliotheque.php";
require_once "models/Livre.php";
require_once "models/Magazine.php";


$l = new Livre('1984', 'Orwell', 12.50, true, '978-2070368228');
$li = new Livre('1980', 'Or', 120, true, '97');

echo $l->getDescription();

if ($l->estDisponible()){
    echo "\n true \n";
}else{
    echo "\n false";
}

$m = new Magazine('Nat. Geographic', 'NGS', 5.99, true, 312);
$mag = new Magazine('ANata', 'NG', 59, true, 397);


echo $m->getDescription();

$m->emprunter();

if ($m->estDisponible()){
    echo "\n true \n";
}else{
    echo "\n false";
}

$bib = new Bibliotheque(0.50);

echo "\n" . $bib->calculerRetard($l, 5);

// $l->emprunter();

$bib->ajouterDocument($l);

echo "\n" . $bib->calculerRetard($l, 5);

echo "\n" . $bib->getResume();