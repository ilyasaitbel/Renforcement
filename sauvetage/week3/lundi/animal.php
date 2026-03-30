<?php

// class animl{
//     private $nom;
//     private $race;

//     public function __construct($nom,$race)
//     {
//         $this->nom = $nom;
//         $this->race =$race;
// }
// }

class animal{
    public function __construct(public $nom,public $race){}

    public function parler(){
        echo "$this->nom dit: Grr! onki\n";
    }
}

$animal1 = new animal('lolo','lion');

$animal1->parler();

$animal2 = new animal('bella','chat');

$animal2->parler();

echo $animal1->nom;