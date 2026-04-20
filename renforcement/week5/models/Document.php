<?php

abstract class Document implements Empruntable {
    public function __construct(protected $titre, protected $auteur, protected $prix, protected $disponible){}

    public function getTitre(){
        return $this->titre;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function estDisponible(){
        return $this->disponible;
    }
    public function emprunter(){
        return $this->disponible = false;
    }
    public function getDescription(){
        return "$this->titre — $this->auteur ($this->prix €)";
    }
}