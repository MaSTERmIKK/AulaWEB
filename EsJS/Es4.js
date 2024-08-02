function filtraPerEta(array, soglia) {
    return array.filter(function(oggetto) {
        return oggetto.eta > soglia;
    });
}

// Esempio di utilizzo
const persone = [
    { nome: "Mario", eta: 30 },
    { nome: "Luigi", eta: 25 },
    { nome: "Peach", eta: 35 },
    { nome: "Yoshi", eta: 20 }
];
console.log(filtraPerEta(persone, 25));
// Output: [ { nome: 'Mario', eta: 30 }, { nome: 'Peach', eta: 35 } ]
