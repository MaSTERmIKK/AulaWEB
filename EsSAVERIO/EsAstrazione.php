Obiettivi dell'Esercizio
Definire una classe astratta: Creare una classe astratta Dispositivo che includa metodi astratti per le operazioni comuni.
Estendere la classe astratta: Sviluppare sottoclassi specifiche per diversi tipi di dispositivi (ad esempio, Smartphone e Tablet).
Implementare i metodi astratti: Ogni sottoclasse deve implementare i metodi definiti nella classe astratta in modo specifico per il tipo di dispositivo.
Testo dell'Esercizio
Obiettivo: Implementare un sistema di gestione dei dispositivi utilizzando classi astratte e ereditarietà in PHP.





Soluzione:

<?php
abstract class Dispositivo {
    protected $marca;
    protected $modello;

    public function __construct($marca, $modello) {
        $this->marca = $marca;
        $this->modello = $modello;
    }

    abstract public function accendi();
    abstract public function spegni();
    abstract public function mostraInfo();
}

class Smartphone extends Dispositivo {
    public function accendi() {
        echo "Smartphone {$this->marca} {$this->modello} acceso.<br>";
    }

    public function spegni() {
        echo "Smartphone {$this->marca} {$this->modello} spento.<br>";
    }

    public function mostraInfo() {
        echo "Smartphone di marca {$this->marca} e modello {$this->modello}.<br>";
    }
}

class Tablet extends Dispositivo {
    public function accendi() {
        echo "Tablet {$this->marca} {$this->modello} acceso.<br>";
    }

    public function spegni() {
        echo "Tablet {$this->marca} {$this->modello} spento.<br>";
    }

    public function mostraInfo() {
        echo "Tablet di marca {$this->marca} e modello {$this->modello}.<br>";
    }
}

// Esempi di utilizzo
$iphone = new Smartphone('Apple', 'iPhone 13');
$iphone->accendi();
$iphone->mostraInfo();
$iphone->spegni();

$ipad = new Tablet('Apple', 'iPad Pro');
$ipad->accendi();
$ipad->mostraInfo();
$ipad->spegni();
?>
