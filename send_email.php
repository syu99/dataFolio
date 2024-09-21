<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'johan.dev.pro@gmail.com';
    $subject = 'Nouveau message de contact';
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'email.";
    }
}
?>
