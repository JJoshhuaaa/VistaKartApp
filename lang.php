<?php
session_start();

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
    $_SESSION['language'] = $language;
} elseif (isset($_SESSION['language'])) {
    $language = $_SESSION['language'];
} else {
    $language = 'nl'; // standaardtaal
}

if ($language == 'nl') {
    $lang = array(
        'title' => 'VISTA Kart App',
        'form_title' => 'Schrijf in voor het Vista Kart 2024 toernooi',
        'name' => 'Naam:',
        'last_name' => 'Achternaam:',
        'email' => 'E-mail:',
        'submit' => 'Inschrijven',
        'invalid_email' => 'Onjuiste e-mail.',
        'email_exists' => 'Dit e-mailadres is al geregistreerd.',
        'button' => 'Inschrijven',
    );
} else {
    $lang = array(
        'title' => 'VISTA Kart App',
        'form_title' => 'Register for the Vista Kart 2024 Tournament',
        'name' => 'Name:',
        'last_name' => 'Last Name:',
        'email' => 'Email:',
        'submit' => 'Register',
        'invalid_email' => 'Invalid email.',
        'email_exists' => 'This email address is already registered.',
        'button' => 'register',
    );
}
?>
