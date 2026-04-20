<?php

class PlatSale extends Plat {
        public function __construct($id,$nom,$prixBase,$calories, protected $ingredients, protected $estVegetarien){
            parent::__construct($id,$nom,$prixBase,$calories);
        }

        public function calculerPrix(){
            return $this->prixBase * 1.10;
        }
        public function estDisponible(){
            return $this->prixBase > 0 && !empty($this->ingredients);
        }
        public function getDescription(){
            $desc = parent::getDescription() . " | Salé";
            if($this->estVegetarien == true)
                return $desc . " Vegetarien: $this->estVegetarien";
            return $desc;   
        }
        
}