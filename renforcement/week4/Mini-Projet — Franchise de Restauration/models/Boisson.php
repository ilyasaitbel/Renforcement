<?php

class Boisson extends Plat{
    public function __construct($id,$nom,$prixBase,$calories, protected $volum, protected $estAlcoolisee){
        parent::__construct($id,$nom,$prixBase,$calories);
    }
    public function calculerPrix(){
        if($this->estAlcoolisee) return $this->prixBase * 1.20;
        return $this->prixBase * 1.055;
    }
    public function estDisponible(){
        return $this->volum > 0 && $this->prixBase > 0;
    }
    public function calculerPrixParLiter(){
        return $this->calculerPrix() / $this->volum * 1000 . 'prix au litre TTC';
    }
    public function getDescription(){
        if($this->alcoolisee) return parent::getDescription() . "volume: $this->volum ml | Boisson + [Alcoolisée]"; 
        return parent::getDescription();
    }
}
