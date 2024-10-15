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
    );
}
?>