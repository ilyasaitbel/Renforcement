<?php
require_once 'Bien.php';

class Maison extends Bien {

    public function __construct($id,$surface,$adress,$prixBase,private $nbPieces,private $hasJardin,private $surfaceJardin){
        parent::__construct($id,$surface,$adress,$prixBase);
    }

    public function calculerPrix(){
        return $this->prixBase + ($this->nbPieces * 8000) + ($this->hasJardin ? $this->surfaceJardin * 150 : 0);
    }

    public function estDisponible(){
        return $this->nbPieces >= 1 && $this->prixBase > 0;
    }

    public function getDescription(){
        return parent::getDescription() . " | Maison {$this->nbPieces} pièces"
            . ($this->hasJardin ? " avec jardin" : " sans jardin");
    }
}