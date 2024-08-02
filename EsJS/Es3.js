function trovaNumeroPiuGrande(array) {
    if (array.length === 0) {
        return null;
    }
    let massimo = array[0];
    for (let i = 1; i < array.length; i++) {
        if (array[i] > massimo) {
            massimo = array[i];
        }
    }
    return massimo;
}

// Esempio di utilizzo
const numeri = [10, 5, 8, 21, 3];
console.log(trovaNumeroPiuGrande(numeri)); // Output: 21
