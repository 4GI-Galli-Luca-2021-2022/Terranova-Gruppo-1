<?php
// Esegue la connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearpay";

// Recupera i dati dal modulo HTML
$nomeIntestatario = $_POST['nomeIntestatario'];
$cognomeIntestatario = $_POST['cognomeIntestatario'];
$codiceFiscale = $_POST['codiceFiscale'];
$startDate = $_POST['start-date'];
$endDate = $_POST['end-date'];
$nomeContratto = $_POST['nomeContratto'];

$conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la connessione
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
   }

if (isset($_POST['nomeIntestatario']) && !empty($_POST['nomeIntestatario']) &&
    isset($_POST['cognomeIntestatario']) && !empty($_POST['cognomeIntestatario']) &&
    isset($_POST['codiceFiscale']) && !empty($_POST['codiceFiscale']) &&
    isset($_POST['start-date']) && !empty($_POST['start-date']) &&
    isset($_POST['end-date']) && !empty($_POST['end-date'])) {
 // Crea una nuova connessione
    

    // Esegue l'inserimento dei dati nel database
    $sql = "INSERT INTO contratto (nome_intestatario, cognome_intestatario, codice_fiscale, data_inizio, data_fine,nome)
            VALUES ('$nomeIntestatario', '$cognomeIntestatario', '$codiceFiscale', '$startDate', '$endDate','$nomeContratto')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Chiude la connessione
    $conn->close();
} else {
    // Se non tutti i campi sono stati inviati o sono vuoti, mostra un messaggio di errore
    echo "Errore: tutti i campi sono obbligatori.";
}
?>
