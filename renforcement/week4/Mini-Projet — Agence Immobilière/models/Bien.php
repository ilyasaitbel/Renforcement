<?php
abstract class Bien {
    public function __construct(protected $id, protected $surface, protected $adress, protected $prixBase) {}

    public function getId(){ return $this->id; }
    public function getSurface(){ return $this->surface; }
    public function getAdress(){ return $this->adress; }
    public function getPrixBase(){ return $this->prixBase; }

    public function setPriBase($p){
        if($p > 0) $this->prixBase = $p;
    }

    abstract public function calculerPrix();
    abstract public function estDisponible();

    public function getDescription(){
        return "Bien #[$this->id] — [$this->surface]m² à [$this->adress]";
    }
}