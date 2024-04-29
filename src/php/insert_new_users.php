<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearpay";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['email']) && !empty($_POST['provincia']) && !empty($_POST['nazione']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])) {

    // Verifica che la password e la sua conferma siano identiche
    if ($_POST['password'] !== $_POST['confirmpassword']) {
        die("La password e la sua conferma non corrispondono.");
    }

    $nome = $conn->real_escape_string($_POST['nome']);
    $cognome = $conn->real_escape_string($_POST['cognome']);
    $email = $conn->real_escape_string($_POST['email']);
    $provincia = $conn->real_escape_string($_POST['provincia']);
    $nazione = $conn->real_escape_string($_POST['nazione']);
    $password = $conn->real_escape_string($_POST['password']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Utenti (nome, cognome, email, provincia, nazione, password_hash)
    VALUES ('$nome', '$cognome', '$email', '$provincia', '$nazione', '$password_hash')";

    if ($conn->query($sql) === TRUE) {
        header("Location: myProfile.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Please fill in all the required fields";
}

$conn->close();
?>
