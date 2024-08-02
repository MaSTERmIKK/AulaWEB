Esercizio sull'Incapsulamento
Obiettivo: Creare una classe PHP chiamata Studente per gestire le informazioni di uno studente, dimostrando il principio dell'incapsulamento.

Requisiti:

La classe Studente deve avere due proprietà private: nome e matricola.
Implementare un costruttore che accetti il nome dello studente e il numero di matricola come parametri.
Fornire i metodi pubblici getNome() e getMatricola() per accedere ai dati dello studente.
Includere un metodo setNome($nuovoNome) che permetta di modificare il nome dello studente dopo la creazione dell'oggetto.






Codice di Soluzione:


<?php
class Studente {
    private $nome;
    private $matricola;

    // Costruttore della classe
    public function __construct($nome, $matricola) {
        $this->nome = $nome;
        $this->matricola = $matricola;
    }

    // Metodo per ottenere il nome dello studente
    public function getNome() {
        return $this->nome;
    }

    // Metodo per ottenere la matricola dello studente
    public function getMatricola() {
        return $this->matricola;
    }

    // Metodo per impostare un nuovo nome
    public function setNome($nuovoNome) {
        $this->nome = $nuovoNome;
    }
}

$studente = new Studente("Luca Bianchi", 12345);
echo "Nome: " . $studente->getNome() . ", Matricola: " . $studente->getMatricola() . "<br>";

$studente->setNome("Marco Neri");
echo "Nuovo nome: " . $studente->getNome() . "<br>";
?>
