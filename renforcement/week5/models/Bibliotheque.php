<?php

class Bibliotheque extends Document {
    
    private $documents = [];
    
    public function __construct(protected $tarifRetardJour){}

    public function ajouterDocument(Document $d){
        $this->documents[] = $d;
    }
    public function getDisponibles(){
        $result = [];
        foreach($this->documents as $d){
            if($d->estDisponible())
                $result[] = $d;
        }   
        return $result;     
    }
    public function calculerRetard(Document $d, int $joursRetard){
        return $d->estDisponible() ? $joursRetard * $this->tarifRetardJour : 0 ;
    }
    public function getResume(){
        return count($this->documents) . " doc(s) au total," . count($this->getDisponibles()) . " disponible(s)";
    }
}