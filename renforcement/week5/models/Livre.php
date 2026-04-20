<?php

class Livre extends Document {
    public function __construct($titre,$auteur,$prix,$disponible,protected $isbn){
        parent::__construct($titre,$auteur,$prix,$disponible);
    }
    public function getISBN() {
        return $this->isbn;
    }
    public function getDescription(){
        return '[Livre] ' . parent::getDescription() . " | ISBN: $this->isbn";
    }
}