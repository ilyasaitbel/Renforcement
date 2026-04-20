<?php

class Magazine extends Document {
    public function __construct($titre,$auteur,$prix,$disponible,protected $numero){
         parent::__construct($titre,$auteur,$prix,$disponible);
    }
    public function getNumero(){
        return $this->numero;
    }
    public function getDescription(){
        return '[Magazine]' . parent::getDescription() . " | N°$this->numero";
    }
}