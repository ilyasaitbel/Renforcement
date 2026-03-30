//PARTIE 1 -- Documentation & Exercices Debutants


//Exercice 1 -- Ma premiere liste

let taches = []
taches.push('Coder', 'Tester', 'Deployer')
taches.unshift('Analyser')
let  derniere = taches.pop()
let  premiere = taches.shift()
taches.splice(1,0,'Documenter')
taches.splice(2,1,'Revue de code')

console.log(taches)
console.log('derniere retiree ' + derniere)
console.log('premiere retiree ' + premiere)

//Exercice 2 -- Affichage d'une liste 

const prenoms = ['Alice', 'Bob', 'Clara', 'David', 'Eva'];
prenoms.forEach((element , index) => {
    console.log(`[${index + 1}] => ${element}`);
});
const longeur = []
prenoms.forEach((element) => {
    longeur.push(element.length);
});
console.log(longeur)

prenoms.forEach((element) => {
    if(element.length > 3)
        console.log(element)
});

//Exercice 3 -- Transformation de donnees

const temperatures = [0, 15, 22, 35, -5, 100];

const Fahrenheit = temperatures.map(c => c * 9/5 + 32)
console.log(Fahrenheit)
  
const descriptions = temperatures.map(t => {
    if(t >= 30)
        return 'Chaud'
    else if(t < 0)
        return 'Froid'
    else
        return 'Tempere'
});
console.log(descriptions)

const objet = temperatures.map(t => {
    let status

    if(t >= 30)
        status = 'Chaud'
    else if(t < 0)
        status = 'Froid'
    else
        status = 'Tempere'
    return {celsius: t , status: status}
})
console.log(objet)

//Exercice 4 -- Filtrage simple

const mots = ['chat','cheval','chien','lion','chameau','cobra','loup','chevre'];

ch = mots.filter(mot => mot.startsWith('ch'));
console.log(ch)
more5letters = ch.filter(l => l.length > 5);
console.log(more5letters)

//Exercice 5 -- Recherche dans un catalogue

const catalogue = [
{ ref: 'A01', nom: 'Stylo bille', prix: 1.20 },
{ ref: 'A02', nom: 'Cahier A4', prix: 3.50 },
{ ref: 'A03', nom: 'Surligneur', prix: 2.10 },
{ ref: 'A04', nom: 'Post-it', prix: 3.80 },
{ ref: 'A05', nom: 'Ciseaux', prix: 6.30 },
];

const produit = catalogue.find(p => p.ref === 'A03');
const Cahierdex = catalogue.findIndex(c => c.nom === 'Cahier A4')
console.log(produit)
console.log(Cahierdex)

const prod = catalogue.find(p => p.ref === 'A03');

if(prod === undefined)
    console.log('elle n existe pas le produit')
else
    console.log('le produit trouve' , prod)

//Exercice 6 -- Premiers calculs avec reduce

// // reduce(callback, valeurInitiale)
// // callback recoit : (accumulateur, elementCourant, index, tableau)
// const nb = [1, 2, 3, 4, 5];
// const somme = nb.reduce((acc, n) => acc + n, 0); // 15
// const max = nb.reduce((acc, n) => n > acc ? n : acc, nb[0]); // 5
// // Compter les occurrences
// const animaux = ['chat','chien','chat','oiseau','chat'];
// const compte = animaux.reduce((acc, a) => {
// acc[a] = (acc[a] || 0) + 1;
// return acc;
// }, {});
// { chat: 3, chien: 1, oiseau: 1 }

const notes = [14, 8, 17, 11, 15, 9, 18, 12];

const somme = notes.reduce((acc,n) => acc + n , 0)

const moyen = notes.reduce((acc,n,i,arr) => acc + n / arr.length,0)

const moyenn = somme / notes.length
console.log(somme) 
console.log(moyen)

const plushaute = notes.reduce((acc, n) => n > acc ? n : acc)
console.log(plushaute)

let fruits = ["apple","orange","orange","banane","orange","apple"]

let count = fruits.reduce((acc,cur) => {
    acc[cur] = (acc[cur] ?? 0) + 1
    return acc;
},{})
console.log(count)

const nb = [1,4,7,2,3,7,5,6];

const max = nb.reduce((acc,cur) => acc > cur ? acc : cur );
console.log(max);


// const trie_ext = extentions.sort((a,b) => b.prix - a.prix)
// console.log(trie_ext);  

const extentions = [{nom:"fridje",prix:500},{nom:"souris",prix:50},{nom:"clavie",prix:30}].sort()
extentions.sort((a,b) => a.nom.localeCompare(b.nom))
console.log(extentions);

//Exercice 7 -- Tris simples 

const scores = [45, 12, 78, 3, 99, 56, 23, 67];
const noms = ['Zoe','Alice','Marc','Bob','Yasmine','Chloe'];

triezScoreCroissant = scores.sort((a,b) => a - b)
console.log(triezScoreCroissant);
triezScoreDecroissant = scores.sort((a,b) => b - a).slice(0,3)
console.log(triezScoreDecroissant)

noms.sort((a,b) => a.localeCompare(b))
console.log(noms);

// const arr = [1, 2, 3, 4, 5];

// arr.splice(2, 2,5,6,7,8,9);

// console.log(arr);

let fruitss = ["pomme","kiwi","banane"]
let legumes = ["tomate","carotte"]
let aliments = [...fruitss, ...legumes]
console.log(aliments);

let copiepanier = aliments.push("cerise");

console.log(copiepanier); //nombre aliments
console.log(aliments); //arr

let nbr = [3,1,4,1,5,9,2,6]

let maxx = Math.max(...nbr)
let min = Math.min(...nbr)
console.log("le max :" + maxx + "\nle min :" + min)

const couleurs=['rouge','vert','bleu','jaune']

const [premier, deuxième, ...autresCouleures] = couleurs;

console.log(premier)
console.log(deuxième)
console.log(autresCouleures)

let [x,y] = [10,20];
console.log('avant \nx :' + x + '\ny :' + y);
[x,y] = [y,x];
console.log(' apres\nx :' + x + '\ny :' + y);

const data=[42]

const [val, unite='kg'] = data

console.log(val + '' + unite )

//PARTIE 2 -- Challenges Intermediaires