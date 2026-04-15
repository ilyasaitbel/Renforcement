<?php
require_once 'Bien.php';

class Appartement extends Bien {

    public function __construct($id,$surface,$adress,$prixBase,private $etage,private $hasBalcon,private $charges){
        parent::__construct($id,$surface,$adress,$prixBase);
    }

    public function calculerPrix(){
        return $this->prixBase + ($this->etage * 500) + ($this->hasBalcon ? 3000 : 0);
    }

    public function estDisponible(){
        return $this->prixBase > 0;
    }

    public function getDescription(){
        return parent::getDescription() . " | Appt étage $this->etage " 
            . ($this->hasBalcon ? "avec balcon" : "sans balcon");
    }
}