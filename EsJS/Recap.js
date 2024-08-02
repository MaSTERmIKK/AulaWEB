// Definizione di una funzione che prende due numeri e restituisce la loro somma
function somma(a, b) {
    return a + b;
}

// Uso della funzione console.log per stampare output nel console del browser
console.log(somma(5, 3));  // Stampa: 8

// Definizione di una funzione che utilizza un ciclo for per sommare tutti gli elementi di un array
function sommaArray(elementi) {
    let totale = 0;
    for (let i = 0; i < elementi.length; i++) {
        totale += elementi[i];
    }
    return totale;
}

// Array di numeri
let numeri = [1, 2, 3, 4, 5];
// Chiamata della funzione sommaArray con l'array numeri
console.log(sommaArray(numeri));  // Stampa: 15

// Definizione di una funzione che mostra come utilizzare parametri predefiniti
function saluto(nome = "Visitatore") {
    return "Ciao " + nome + "!";
}

// Chiamata della funzione saluto senza passare parametri
console.log(saluto());           // Stampa: Ciao Visitatore!
// Chiamata della funzione saluto passando un parametro
console.log(saluto("Mario"));    // Stampa: Ciao Mario!

// Funzione che dimostra l'uso delle funzioni di callback
function elabora(elementi, callback) {
    elementi.forEach(callback);
}

// Utilizzo della funzione elabora con una funzione di callback che stampa ogni elemento
elabora(numeri, elemento => console.log(elemento));
