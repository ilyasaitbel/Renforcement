let catalogue = [
{ id:1, nom:'Stylo bille bleu', cat:'ecriture', prix:1.20, stock:150,
note:4.2 },
{ id:2, nom:'Stylo bille rouge', cat:'ecriture', prix:1.20, stock:0,
note:4.0 },
{ id:3, nom:'Stylo gel noir', cat:'ecriture', prix:2.50, stock:60,
note:4.7 },
{ id:4, nom:'Cahier A4 200p', cat:'papier', prix:5.50, stock:45,
note:4.8 },
{ id:5, nom:'Cahier A5 100p', cat:'papier', prix:3.20, stock:80,
note:4.3 },
{ id:6, nom:'Bloc-notes A5', cat:'papier', prix:2.80, stock:30,
note:3.9 },
{ id:7, nom:'Surligneur jaune', cat:'ecriture', prix:1.80, stock:0,
note:4.5 },
{ id:8, nom:'Surligneur rose', cat:'ecriture', prix:1.80, stock:20,
note:4.3 },
{ id:9, nom:'Ciseaux bureau', cat:'bureau', prix:6.50, stock:8,
note:3.7 },
{ id:10, nom:'Agrafeuse', cat:'bureau', prix:9.90, stock:5,
note:4.1 },
{ id:11, nom:'Post-it jaunes', cat:'papier', prix:4.20, stock:60,
note:4.6 },
{ id:12, nom:'Agenda 2025', cat:'agenda', prix:12.0, stock:15,
note:4.7 },
{ id:13, nom:'Marqueur permanent', cat:'ecriture', prix:3.10, stock:35,
note:4.4 },
{ id:14, nom:'Regle 30cm', cat:'bureau', prix:1.50, stock:90,
    note:3.8 },
    { id:15, nom:'Compas de precision', cat:'bureau', prix:8.90, stock:12,
        note:4.6 },
    ];
    
    // let nouveauProduit = {nom:'lait',cat:'boisson',prix:5,stock:10,note:7}
    // const newId = Math.max(...catalogue.map(p => p.id)) + 1;
    // const cat1 = [...catalogue, { id: newId, ...nouveauProduit }];
    // let modifications = {prix:50,stock:100,note:8}
    // const cat2 = catalogue.map(p => p.id === 1 ? { ...p, ...modifications } : p);
    // console.log(newId)
    // console.log(JSON.stringify(cat2, null, 2));
    // const cat3 = catalogue.filter(p => p.id !== 1);
    // console.log(cat3)

// -----------Exercice 1 -- Les quatre operations CRUD
const newId = Math.max(...catalogue.map(p => p.id)) + 1
console.log(newId)
const newproduct = {id:newId,nom:'lait',cat:'boisson',prix:5,stock:10,note:7}
const newcat = [...catalogue,newproduct]
console.log(JSON.stringify(newcat, null , 2))
const newcat2 = catalogue.filter(p => p.id !== 1)
console.log(JSON.stringify(newcat2, null,2));
function getProduitById(catalogue,id){
        const p1 = catalogue.find(p => p.id === id)
        console.log(p1)
    };
    getProduitById(catalogue,2);
    
    // const newId = Math.max(...catalogue.map(p => p.id)) + 1
    // const c1 = [...catalogue, {id: newId, nom:'Taille-crayon', cat:'bureau',
    //     prix:1.10, stock:200, note:4.0}];
    // console.log(c1.length); // 16
    // console.log(c1[c1.length-1].id); // 16
    // const c2 = catalogue.map(p => p.id === 2 ? {...p,stock:50} : p);
    // console.log(c2.find(p => p.id === 2).stock); // 50
    // console.log(catalogue.find(p => p.id === 2).stock); // 0 (original intact)
    
    function rechercherProduits(catalogue, filtres = {}) {
    let res = catalogue;
    if (filtres.enStock) res = res.filter(p => p.stock > 0);
    if (filtres.prixMax) res = res.filter(p => p.prix <= filtres.prixMax);
    // ... autres criteres
    console.log(res);
    }
    rechercherProduits(catalogue, {enStock:true})
    rechercherProduits(catalogue, {prixMax:1.4})