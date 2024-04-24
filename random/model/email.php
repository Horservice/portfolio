<?php

function sendEmail($email, $name, $sujet, $description) {
    $head = "MIME-Version: 1.0" . "\r\n";
    $head .= "From: $email" . "\r\n"; 
    $head .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $to = "helleringer.simon@hotmail.com";
    
    $subject = $sujet;    
    $message = "<p>Nom: $name</p>";
    $message .= "<p>Description: $description</p>";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $head)) {
        return true; // L'e-mail a été envoyé avec succès
    } else {
        return false; // Erreur lors de l'envoi de l'e-mail
    }
}

