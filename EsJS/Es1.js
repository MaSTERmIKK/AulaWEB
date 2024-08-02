function sommaNumeriPari(array) {
    let somma = 0;
    for (let i = 0; i < array.length; i++) {
        if (array[i] % 2 === 0) {
            somma += array[i];
        }
    }
    return somma;
}

// Esempio di utilizzo
const numeri = [1, 2, 3, 4, 5, 6];
console.log(sommaNumeriPari(numeri)); // Output: 12
