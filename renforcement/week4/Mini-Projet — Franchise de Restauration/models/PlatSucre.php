<?php

class PlatSucre extends Plat {
    public function __construct($id,$nom,$prixBase,$calories, protected $estMaisonFail , protected $nbParts){
        parent::__construct($id,$nom,$prixBase,$calories);
    }

    public function calculerPrix(){
        if($this->estMaisonFail)
            return $this->prixBase * 1.055;
        return $this->prixBase * 1.10;
    }

    public function estDisponible(){
        return $this->nbParts > 0 && $this->prixBase > 0;
    }
    public function getDescription(){

        if($this->estMaisonFail) return parent::getDescription() . " Sucré' + ' [Fait maison]' ";
        return parent::getDescription();
    }
}