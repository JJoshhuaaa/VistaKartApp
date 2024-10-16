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
        'button' => 'submit',

                                     // footer
         'footer_1' => 'VISTA Karting',  
         'footer_2' => 'Inschrijven',                           
         'footer_3' => 'Contact & Locatie',
         'footer_4' => 'Informatie',
         'footer_5' => 'Informatie',
         'footer_6' => 'Prijzen',
         'footer_7' => 'Teams',
         'footer_8' => 'VISTAKart Corporatie',
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
        'button' => 'Register',

                                    // footer
         'footer_1' => 'Vista Karting',  
         'footer_2' => 'Register',                           
         'footer_3' => 'Contact & Location',
         'footer_4' => 'Information',
         'footer_5' => 'Information',
         'footer_6' => 'Prices',
         'footer_7' => 'Teams',
         'footer_8' => 'VISTAKart Corporation',                        
    );
}
?>
