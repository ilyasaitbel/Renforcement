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

const mots = ['chat','cheval','chien','lion','chameau','cobra','loup','chevre'];

ch = mots.filter(mot => mot.startsWith('ch'));
console.log(ch)
more5letters = ch.filter(l => l.length > 5);
console.log(more5letters)

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
console.log(moyenn)

const plushaute = notes.reduce((acc, n) => n > acc ? n : acc)
console.log(plushaute)