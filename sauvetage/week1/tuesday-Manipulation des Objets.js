const fiche = { prenom:'Bob', nom:'Dupont', age:34, ville:'Lyon' };

console.log(fiche.prenom + ' ' + fiche.nom);

function getProp(obj, cle) {
  for (let key in obj) {
    if (key === cle) {
      return obj[key];
    }
  }
  return 'Inconnu';
}     

function getProp(obj, cle) {
  if (cle in obj) {
    return obj[cle];
  }
  return 'Inconnu';
}

function getProp(obj, cle) {
  let result = 'Inconnu';

  Object.keys(obj).forEach(key => {
    if (key === cle) {
      result = obj[key];
    }
  });

  return result;
}
console.log(getProp(fiche, 'ville'));
console.log(getProp(fiche, 'salaire'));

