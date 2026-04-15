<?php
require_once 'Bien.php';

class LocalCommercial extends Bien {

    public function __construct($id,$surface,$adress,$prixBase,private $activiteAutorisee,private $loyer){
        parent::__construct($id,$surface,$adress,$prixBase);
    }

    public function calculerPrix(){
        return $this->prixBase * 1.15;
    }

    public function estDisponible(){
        return $this->loyer > 0 && !empty($this->activiteAutorisee);
    }

    public function calculerRentabilite(){
        return ($this->loyer * 12) / $this->calculerPrix() * 100;
    }

    public function getDescription(){
        return parent::getDescription() . " | Local {$this->activiteAutorisee} — {$this->loyer}€/mois";
    }
}