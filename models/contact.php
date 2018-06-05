<?php

function sendMail($nameEmail, $emailUser, $messageContent){

    $name = htmlentities($nameEmail);
    $email = htmlentities($emailUser);
    $message = htmlentities($messageContent);

    $destinataire = 'deandradeq@gmail.com';
    $sujet = 'Mail provenant de power28.fr'; // Titre de l'email
    $contenu = '<html><head><title>Contact Power 28</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: ' . $name . '</p>';
    $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
    $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
    $contenu .= '</body></html>';

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    mail($destinataire, $sujet, $contenu, $headers);

}

?>