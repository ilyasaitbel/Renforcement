<?php

abstract class Vehicule {
    public function __construct(protected $marque, protected $modele, protected $annee, protected $prixBase){}

    public function getMarque(){
        return $this->marque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function getAnnee(){
        return $this->annee;
    }
    public function getPrixBase(){
        return $this->prixBase;
    }

    abstract public function getPrixFinal();

    static public function getMostExpensive(array $vehicules){
        $vehiculePlusCher = $vehicules[0];

        foreach($vehicules as $v){
            if($v->getPrixBase() > $vehiculePlusCher->getPrixBase())
                $vehiculePlusCher = $v;
        }
        return $vehiculePlusCher;
    }
    public function isRecent(){
         return $this->annee >= date("Y") - 3;
    }

}