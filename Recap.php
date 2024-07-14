<?php
// Definizione di una funzione che somma due numeri e restituisce il risultato
function somma($a, $b) {
    return $a + $b;
}

// Stampa il risultato della funzione somma
echo somma(5, 3) . "\n"; // Stampa: 8

// Definizione di una funzione che somma tutti gli elementi di un array
function sommaArray($elementi) {
    $totale = 0;
    foreach ($elementi as $elemento) {
        $totale += $elemento;
    }
    return $totale;
}

// Array di numeri
$numeri = [1, 2, 3, 4, 5];
// Stampa il risultato della funzione sommaArray
echo sommaArray($numeri) . "\n"; // Stampa: 15

// Definizione di una funzione che utilizza un parametro predefinito
function saluto($nome = "Visitatore") {
    return "Ciao " . $nome . "!";
}

// Chiamata della funzione saluto senza passare parametri
echo saluto() . "\n";          // Stampa: Ciao Visitatore!
// Chiamata della funzione saluto passando un parametro
echo saluto("Mario") . "\n";   // Stampa: Ciao Mario!

// Funzione che dimostra l'uso delle funzioni di callback
function elabora($elementi, $callback) {
    foreach ($elementi as $elemento) {
        $callback($elemento);
    }
}

// Utilizzo della funzione elabora con una funzione di callback che stampa ogni elemento
elabora($numeri, function($elemento) {
    echo $elemento . "\n";
});
?>
