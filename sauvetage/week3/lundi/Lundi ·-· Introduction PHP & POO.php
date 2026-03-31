<?php

$prenom = 'ilyas';
$age = 19;

echo "bonjour je m'appelle $prenom et j'ai $age ans.\n";

if ($age >= 18) {
    echo 'Majeur';
}else{
    echo 'Mineur';
}

$status = ($age >= 18) ? 'Majeur' : 'Mineur';

echo '$status';

for ($i = 1; $i <= 10; $i++){
    echo "\n$i";
} 