<?php

abstract class Plat {
    public function __construct(protected $id, protected $nom, protected $prixBase, protected $calories) {}

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrixBAse(){
        return $this->prixBase;
    }
    public function getCalories(){
        return $this->calories;
    }
    public function setPrixBase($p){
        if ($p > 0) $this->prixBAse = $p;
    }

    abstract public function calculerPrix();
    abstract public function estDisponible();

    public function getDesciption(){
        return "#$this->id de Plat - nom : $this->nom , calories : $this->calories kcal";
    }
}