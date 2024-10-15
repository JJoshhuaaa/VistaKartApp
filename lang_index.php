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
        'karttoernooi' => 'HET SPANNENSTE KARTTOERNOOI',
        'p' => "HET SPANNENSTE KARTTOERNOOI",
        'inschrijven' => 'Schrijf je nu in',

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
        'karttoernooi' => 'THE MOST EXCITING KART TOURNAMENT',
        'p' => "Sign up now for an unforgettable experience full of speed and competition. Only the fastest will win!",
        'inschrijven' => 'Sign up now', 

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
