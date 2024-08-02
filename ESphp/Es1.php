<?php
function sommaNumeriPari($array) {
    $somma = 0;
    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $somma += $numero;
        }
    }
    return $somma;
}

// Esempio di utilizzo
$numeri = [1, 2, 3, 4, 5, 6];
echo sommaNumeriPari($numeri); // Output: 12
?>
