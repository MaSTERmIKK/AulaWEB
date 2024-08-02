function contaParole(str) {
    if (str.trim() === "") {
        return 0;
    }
    return str.trim().split(/\s+/).length;
}

// Esempio di utilizzo
const frase = "Questa è una frase di esempio.";
console.log(contaParole(frase)); // Output: 6
