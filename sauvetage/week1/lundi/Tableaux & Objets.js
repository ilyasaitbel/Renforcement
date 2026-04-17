// 1. Crée un tableau "fruits" avec 3 fruits
let fruits = ['banane','pomme','orange'];
// 2. Affiche le deuxième élément
console.log(fruits[1]);

let couleurs = ["rouge","blue","vert"]

couleurs.push("violet")

console.log(couleurs.length)

let pesonne = {
    nom:"ilyas",
    age:19,
    ville:'marrakech'
}
console.log(pesonne.nom)

let animaux = ["chat","chien","lapin","tortue"];

for (let i = 0 ; i<animaux.length;i++){
    console.log(animaux[i]);
}
let coureses = [
    {nom:'JS',prix:28},
    {nom:'oop',prix:7},
    {nom:'python',prix:10}
]
let sum = 0;
for (let i = 0 ; i<coureses.length ; i++)
{
    sum = sum + coureses[i].prix
}
console.log(sum);

let somme = 0;
for (let i = 0 ; i<coureses.length ; i++)
{
    coureses[i].quantite = 2
    coures_total = coureses[i].prix * coureses[i].quantite
    console.log(coures_total)
    somme = somme + coures_total
}
console.log(somme)

let produit = {
    nom:"laptop",
    prix:30000,
    categorie:"it"
}
console.log('Le produit ' + produit.nom + ' coute ' + produit.prix + ' dh (categorie: ' + produit.categorie + ')');


































