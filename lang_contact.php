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
        'title' => 'Contact',
        'form_title' => 'Contact',
        'contactinfo' => 'ContactInfo',
        'stuur_email' => 'Stuur een mail:',
        'bel_ons' => 'Bel ons:',
        'bericht_ons' => 'Bericht Ons',
        'naam' => 'Naam:',
        'email' => 'Email:',
        'bericht' => 'Bericht:',
        'stuur_bericht' => 'Stuur bericht',

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
        'title' => 'Contact',
        'form_title' => 'Contact',
        'contactinfo' => 'Contact Info',
        'stuur_email' => 'Send an email:',
        'bel_ons' => 'Call us',
        'bericht_ons' => 'Message Us',
        'naam' => 'Name:',
        'email' => 'Email:',
        'bericht' => 'Message:',
        'stuur_bericht' => 'Send message',

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