<?php
class Camionnette extends Vehicule {
    public function __construct($marque,
    $modele,
    $annee,
    $prixBase,
    private $chargeUtile){
        parent::__construct($marque,$modele,$annee,$prixBase);
    }

    public function getPrixFinal(){
        return $this->prixBase + $this->chargeUtile * 0.10;
    }
    public function getDescription(){
        return "\n la marque de Camionnette : {$this->getMarque()} \nmodel: {$this->getModele()} \n anne: {$this->getAnnee()} \n prixBase: {$this->getPrixBase()} \ncharge: $this->chargeUtile \n prixFinal: {$this->getPrixFinal()}";
    }
}