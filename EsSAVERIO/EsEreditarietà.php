Esercizio sull'Ereditarietà
Obiettivo: Estendere la classe Veicolo con una sottoclasse chiamata Auto, dimostrando il principio dell'ereditarietà.

Requisiti:

La classe base Veicolo deve avere proprietà protette marca e modello e un metodo costruttore per inizializzarle.
Implementare nella classe Veicolo un metodo mostraDettagli() che stampi marca e modello.
La sottoclasse Auto estende Veicolo e aggiunge una proprietà numeroPorte.
Implementare nella classe Auto un costruttore che accetti marca, modello e numero di porte e li inizializzi appropriatamente.
Sovrascrivere il metodo mostraDettagli() in Auto per includere anche il numero di porte nel dettaglio.








Codice di Soluzione:


<?php
class Veicolo {
    protected $marca;
    protected $modello;

    public function __construct($marca, $modello) {
        $this->marca = $marca;
        $this->modello = $modello;
    }

    public function mostraDettagli() {
        echo "Marca: $this->marca, Modello: $this->modello<br>";
    }
}

class Auto extends Veicolo {
    private $numeroPorte;

    public function __construct($marca, $modello, $numeroPorte) {
        parent::__construct($marca, $modello);
        $this->numeroPorte = $numeroPorte;
    }

    public function mostraDettagli() {
        parent::mostraDettagli();
        echo "Numero porte: $this->numeroPorte<br>";
    }
}

$auto = new Auto("Fiat", "500", 4);
$auto->mostraDettagli();
?>
