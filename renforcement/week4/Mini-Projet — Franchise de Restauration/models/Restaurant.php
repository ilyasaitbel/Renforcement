<?php

class Restaurant {
    private $nom;
    private $menu = [];
    private $tauxTVA;

    public function __construct($nom, $tauxTVA){
        $this->nom = $nom;
        if($tauxTVA < 0 || $tauxTVA > 25) $tauxTVA = 10;
    }
    public function ajouterPlat(Plat $p){
        $this->menu[] = $p;
    }
    public function getPlatsDisponibles(){
        $result = [];

        foreach($this->menu as $plat){
            if($plat->estDisponible())
                $result[] = $plat;
        }
        return $result;
    }
    public function calculerCA(){
        $Ca = 0;
        foreach($this->getPlatsDisponibles() as $plat){
            $Ca += $plat->calculerPrix();
        }
        return $Ca;
    }
    public function getPlatPlusRentable(){
       
        $platPlusRentable = null;

        foreach($this->getPlatsDisponibles() as $plat){
            if($platPlusRentable == null || $plat->calculerPrix() > $platPlusRentable->calculerPrix())
                $platPlusRentable = $plat;
        }
        return $platPlusRentable;
    }
    public function filtrerParCalories(int $max){
        $result = [];

        foreach($this->getPlatsDisponibles() as $plat){
            if($plat->getCalories() <= $max)
                $result[] = $plat; 
        }
        return $result;
    }
    public function getStatistiques(){

        $moyen_c = 0;

        foreach($this->menu as $plat){
            $moyen_c += $plat->getCalories();
        }
        return [
            'nb_total' => count($this->menu),
            'nb_disponibles' => count($this->getPlatsDisponibles()),
            'prix_moyen' => round(($this->calculerCA() / count($this->getPlatsDisponibles())), 2),
             'calories_moyennes' => round(($moyen_c / count($this->menu)),2)
        ];
    }
}