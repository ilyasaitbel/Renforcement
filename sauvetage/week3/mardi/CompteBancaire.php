<?php

class CompteBancaire {
    public function __construct(private $titulaire, private $iban, private $solde = 0){}

    public function getTitulaire(){
        return $this->titulaire;
    }
    public function getIban(){
        return $this->iban;
    }
    
    public function getSolde(){
        return $this->solde;
    }
    public function deposer($montant){
        if($montant <= 0){
            echo "le montant : $montant est invalide !";
            return;
        }
        $this->solde = $montant;
    }
    public function retirer($montant){
        if($montant > 0 & $montant < $this->solde){
            $this->solde = $this->solde - $montant;
            echo "\nle solde maintenant $this->solde";
        }
        else
            echo "\n solde insuffisant";
    }
    public function afficherInfos(){
        echo "le titulaire : $this->titulaire \n le solde : $this->solde";
    }
}

$compte1 = new CompteBancaire('ilyas','Ma15645168416518');
$compte1->deposer(10000);
$compte1->afficherInfos();

$compte1->retirer(20000);
$compte1->retirer(5000);