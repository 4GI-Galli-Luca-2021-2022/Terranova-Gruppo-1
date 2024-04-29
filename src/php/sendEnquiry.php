<?php
// Recupera i dati dal form utilizzando il metodo POST
$nome = isset($_POST['nomeE']) ? $_POST['nomeE'] : '';
$cognome = isset($_POST['cognomeE']) ? $_POST['cognomeE'] : '';
$email = isset($_POST['emailE']) ? $_POST['emailE'] : '';
$telefono = isset($_POST['telefonoE']) ? $_POST['telefonoE'] : '';
$messaggio = isset($_POST['messageE']) ? $_POST['messageE'] : '';

$to = 'lucagalli05@gmail.com';
$subject = 'Nuovo messaggio dal form di contatto';
$email_message = "Nome: $nome\n";
$email_message .= "Cognome: $cognome\n";
$email_message .= "Mail: $email\n";
$email_message .= "Telefono: $telefono\n";
$email_message .= "Messaggio: $messaggio\n";

// Invia l'email utilizzando Sendmail
// Imposta la directory Sendmail
ini_set('sendmail_path', 'C:\xampp\sendmail\sendmail.exe -t');

// Invia l'email
mail($to, $subject, $email_message);

// Stampa i dati a schermo
echo "Ciao ".$nome." ".$cognome."<br>Questa è la tua e-mail:".$email ."<br>Numero inserito :".$telefono."<br>Hai scritto nel messaggio:".$messaggio;

?>
