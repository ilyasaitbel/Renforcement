<?php

class Voiture extends Vehicule {
    public function getPrixFinal(){
        return $this->prixBase + 150;
    }
    public function getDescription(){
        return "\n la marque de voiture : {$this->getMarque()} \nmodel: {$this->getModele()} \n anne: {$this->getAnnee()} \n prixBase: {$this->getPrixBase()} \n prixFinal: {$this->getPrixFinal()}";
    }
}
