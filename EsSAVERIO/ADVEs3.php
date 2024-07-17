Scenario
L'obiettivo è costruire un'applicazione web che permetta agli utenti di aggiungere, visualizzare e cancellare contatti dall'agenda. Ogni contatto avrà un nome, un numero di telefono e un indirizzo email.


Testo dell'Esercizio
Obiettivo: Creare un'applicazione di agenda contatti in PHP e HTML che permetta di aggiungere, visualizzare e cancellare contatti.


Requisiti:
Pagina di Aggiunta Contatto:
Creare un form HTML per l'inserimento di nome, telefono e email del contatto.
Il form dovrà inviare i dati a uno script PHP che li salverà in sessione.

Pagina di Visualizzazione Contatti:
Visualizzare tutti i contatti salvati in sessione in una tabella HTML.
Ogni riga della tabella deve avere un pulsante o un link per cancellare il contatto dalla sessione.

Funzionalità di Cancellazione:
Implementare la logica per cancellare un contatto quando l'utente clicca sul pulsante di cancellazione.



Soluzione di esempio:

<?php
session_start();  // Avvia la sessione PHP

// Verifica se esiste l'array di contatti nella sessione; se non esiste, crealo
if (!isset($_SESSION['contatti'])) {
    $_SESSION['contatti'] = [];
}

// Aggiungi contatto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['aggiungi'])) {
    $nome = htmlspecialchars($_POST['nome']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $email = htmlspecialchars($_POST['email']);
    $_SESSION['contatti'][] = [
        'nome' => $nome,
        'telefono' => $telefono,
        'email' => $email
    ];
    header("Location: " . $_SERVER['PHP_SELF']);  // Reindirizza per evitare duplicati al refresh
    exit;
}

// Cancella contatto
if (isset($_GET['cancella'])) {
    $index = $_GET['cancella'];
    if (isset($_SESSION['contatti'][$index])) {
        array_splice($_SESSION['contatti'], $index, 1);
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Agenda Contatti</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Agenda Contatti</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <button type="submit" name="aggiungi">Aggiungi Contatto</button>
    </form>

    <h2>Elenco Contatti</h2>
    <?php if (!empty($_SESSION['contatti'])): ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Azione</th>
        </tr>
        <?php foreach ($_SESSION['contatti'] as $index => $contatto): ?>
        <tr>
            <td><?= $contatto['nome'] ?></td>
            <td><?= $contatto['telefono'] ?></td>
            <td><?= $contatto['email'] ?></td>
            <td><a href="?cancella=<?= $index ?>">Cancella</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php else: ?>
    <p>Nessun contatto presente.</p>
    <?php endif; ?>
</body>
</html>




Spiegazione del Codice
Gestione Sessioni: Il codice inizia con session_start() per utilizzare le sessioni PHP. La sessione memorizza un array di contatti, che è un array di array associativi con nome, telefono ed email.

Aggiunta di Contatti: Il form HTML permette agli utenti di inserire i dati del nuovo contatto. Quando il form viene inviato, il codice PHP aggiunge il nuovo contatto all'array in sessione e poi reindirizza alla stessa pagina per evitare duplicazioni al refresh del browser.

Visualizzazione dei Contatti: I contatti vengono visualizzati in una tabella HTML. Se l'array di contatti è vuoto, viene mostrato un messaggio appropriato.

Cancellazione di Contatti: Ogni contatto nella tabella ha un link "Cancella" che passa l'indice dell'elemento da cancellare alla stessa pagina. Il PHP rimuove quel contatto dall'array e reindirizza per aggiornare la pagina.


