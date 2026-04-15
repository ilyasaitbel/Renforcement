<?php

class Agence {

    private $biens = [];

    public function __construct(private $nom, private $commission) {
        $this->commission = (0 <= $commission && $commission <= 30 ) ? $commission : 5 ;
    }

    public function ajouterBien(Bien $b){
        $this->biens[] = $b;
    }

    public function getBiensDisponibles(){
        $biensDisponibles = [];

        foreach($this->biens as $bien){
            if($bien->estDisponible())
                $biensDisponibles[] = $bien;
        }
        return $biensDisponibles;
    }

    public function calculerCa(){
        $total = 0;

        foreach($this->getBiensDisponibles() as $bien){
            $total += $bien->calculerPrix() * ($this->commission / 100);
        }

        return $total;
    }

    public function getBienPlusCher(){
        $bienPlusCher = null;

        foreach($this->getBiensDisponibles() as $bien){
            if($bienPlusCher === null || $bienPlusCher->calculerPrix() < $bien->calculerPrix())
                $bienPlusCher = $bien;
        }

        return $bienPlusCher;
    }

    public function filtrerParSurface($min,$max){
        $filtrerBiens = [];

        foreach($this->biens as $bien){
            if($bien->getSurface() >= $min && $bien->getSurface() <= $max)
                $filtrerBiens[] = $bien;
        }

        return $filtrerBiens;
    }

    public function getStatistiques(){
        $biensDisponibles = $this->getBiensDisponibles();
        $nb = count($biensDisponibles);

        $totalPrix = 0;

        foreach($biensDisponibles as $bien){
            $totalPrix += $bien->calculerPrix();
        }

        return [
            'nb_total' => count($this->biens),
            'nb_disponibles' => $nb,
            'prix_moyen' => $nb > 0 ? $totalPrix / $nb : 0,
            'ca_potentiel' => $this->calculerCa()
        ];
    }
}