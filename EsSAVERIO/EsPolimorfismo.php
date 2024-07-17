Esercizio sul Polimorfismo
Obiettivo: Creare un sistema di classi che dimostri il polimorfismo utilizzando una classe base Animale e sottoclassi specifiche come Cane e Gatto.

Requisiti:

Definire una classe base Animale con un metodo emettiSuono().
Creare due sottoclassi di Animale, Cane e Gatto. Ogni classe deve sovrascrivere il metodo emettiSuono() per restituire un suono specifico (ad esempio, il cane fa "Bau bau" e il gatto fa "Miao").
Utilizzare un array di oggetti Animale e iterare attraverso di esso, chiamando il metodo emettiSuono() su ogni oggetto, dimostrando così il polimorfismo in azione.





Codice di Soluzione:


<?php
abstract class Animale {
    // Metodo astratto che deve essere implementato dalle sottoclassi
    abstract public function emettiSuono();
}

class Cane extends Animale {
    public function emettiSuono() {
        return "Bau bau";
    }
}

class Gatto extends Animale {
    public function emettiSuono() {
        return "Miao";
    }
}

// Creazione di un array di oggetti Animale
$animali = [new Cane(), new Gatto()];

// Iterazione dell'array e invocazione del metodo emettiSuono
foreach ($animali as $animale) {
    echo $animale->emettiSuono() . "<br>";
}
?>
