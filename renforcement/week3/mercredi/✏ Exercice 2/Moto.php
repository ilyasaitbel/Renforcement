<?php

class Moto extends Vehicule {
    public function getPrixFinal(){
        if($this->annee < 2020)
            return $this->prixBase - $this->prixBase * 5 / 100;
        return $this->prixBase;
   }
   public function getDescription(){
        return "\n la marque de Moto : {$this->getMarque()} \nmodel: {$this->getModele()} \n anne: {$this->getAnnee()} \n prixBase: {$this->getPrixBase()} \n prixFinal: {$this->getPrixFinal()}";
    }
}