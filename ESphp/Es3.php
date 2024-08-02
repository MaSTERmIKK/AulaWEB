<?php
function trovaNumeroPiuGrande($array) {
    if (count($array) === 0) {
        return null;
    }
    $massimo = $array[0];
    foreach ($array as $numero) {
        if ($numero > $massimo) {
            $massimo = $numero;
        }
    }
    return $massimo;
}

// Esempio di utilizzo
$numeri = [10, 5, 8, 21, 3];
echo trovaNumeroPiuGrande($numeri); // Output: 21
?>
