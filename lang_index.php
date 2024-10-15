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
       
    );
} else {
    $lang = array(
        'title' => 'VISTA Kart App',
        'karttoernooi' => 'THE MOST EXCITING KART TOURNAMENT',
        'p' => "Sign up now for an unforgettable experience full of speed and competition. Only the fastest will win!",
        'inschrijven' => 'Sign up now', 
    );
}
?>
