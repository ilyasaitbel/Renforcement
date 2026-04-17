//PARTIE 2 -- Challenges Intermediaires


// Exercice I1 -- Nettoyeur de tableau 
function nettoyer(tableau){
    // const newtableau = [];

    const newtableau = tableau.filter((e,i,arr) => typeof e === 'number' && e !== 0 && arr.indexOf(e) === i);
    newtableau.sort((a,b) => a - b);
    // tableau.forEach(e => {
    //     if(typeof e === 'number' && e !== 0 && !newtableau.includes(e)){
    //         newtableau.push(e);
    //     }
    //     newtableau.sort((a,b) => { return a - b})
    // });
    return newtableau;
}

console.log(nettoyer([3,1,2,1,3,0,'',5,null,2]) )

// Exercice I2 -- Rotation de tableau 

function rotate(tableau, n) {
    let k = n % tableau.length;
    // let result = tableau.slice(-k);

        // tableau.forEach(nbr => {
        //     if(tableau.length !== result.length)
        //         result.push(nbr);
        // });

    // return result;

    return [...tableau.slice(-k),...tableau.slice(0,-k)]
}

console.log(rotate([1,2,3,4,5], 7) );

// Exercice I3 -- Aplatisseur

function flatten(tableau) {
    // return tableau.reduce((acc,el) => {
    //     if(Array.isArray(el))
    //         return acc.concat(flatten(el))
    //     return acc.concat(el)
    // },[]);
    const result = [];
    tableau.forEach(el => {
        if(Array.isArray(el)){
            flatten(el).forEach(el => {
                result.push(el);
            })
        }else{
            result.push(el)
        }
    });
    return result
}

console.log(flatten([1,[2,3],[4,[5,6]]]));

function intersection(a, b) {
    return [ ...new Set(a.filter(x => b.includes(x)))]
}
console.log(intersection([1,2,3,4,4], [2,4,6]))

function difference(a, b) {
    return a.reduce((acc,x) => {
        if(!b.includes(x) && !acc.includes(x))
            acc.push(x);
        return acc;
    },[])
}


console.log(difference([1,2,3,3,4], [2,4]));