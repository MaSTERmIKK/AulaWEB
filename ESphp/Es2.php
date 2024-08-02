<?php
function contaParole($str) {
    if (trim($str) === "") {
        return 0;
    }
    return count(explode(" ", trim($str)));
}

// Esempio di utilizzo
$frase = "Questa è una frase di esempio.";
echo contaParole($frase); // Output: 6
?>
