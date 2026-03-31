<?php

class produit {
    public function __construct(private $nom,private $prix,private $stock) {}

    public function getNom(){
        return $this->nom;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getStock(){
        return $this->stock;
    }
    public function setPrix($prix){
        if($prix < 0)
            {
                echo 'le prix invalide !';
                return;
            }
        $this->prix = $prix;
    }
    public function setStock($stock){
        if($stock < 0)
        {
            echo 'le stock invalide !';
            return;
        }
        $this->stock = $stock;
    }
    public function afficher(){
        echo "[$this->nom] — [$this->prix]€ stock : [$this->stock]\n";
    }
}

$produiut1 = new produit('tea',14,8);

$produiut2 = new produit('coffe',8,80);

$produiut1->afficher();

$produiut2->afficher();

$produiut1->setPrix(-5);
 
 echo "\n" . $produiut1->getPrix() . "\n";
 echo $produiut1->getNom();