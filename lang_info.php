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
        'title' => 'Info',
        'h1' => 'Informatie',
        'locatie' => 'Locatie:',
        'p_1' => 'Powerarea - Mamelis 1, Lemiers Vaals. Een moderne kartbaan met uitdagende indoor en outdoor tracks.',
        'teams_en_wedstrijden' => 'Teams en Wedstrijden',
        'p_2' => 'Teams van 4 personen (random indeling).',
        'p_3' => 'Er is een opwarmings ronde en kwalificatie ronde, daarna volgt de "Grand Prix"',
        'p_4' => 'Het team met de meeste punten wint.',
        'p_5' => 'Alles onder de top 10 krijgt geen punten',
        'p_6' => 'ieder plek wat je omlaag gaat is 1 punt er vanaf dus:',
        'p_7' => '1ste 10 punten, 2de 9 punten etc.',
    );
} else {
    $lang = array(
        'title' => 'Info',
        'h1' => 'Information',
        'locatie' => 'Location',
        'p_1' => 'Powerarea - Mamelis 1, Lemiers Vaals. A modern kart track with challenging indoor and outdoor courses.',
        'teams_en_wedstrijden' => 'Teams and Races',
        'p_2' => 'Teams of 4 people (randomly assigned).',
        'p_3' => 'There is a warm-up round and a qualifying round, followed by the "Grand Prix."',
        'p_4' => 'The team with the most points wins.',
        'p_5' => 'Everything below the top 10 gets no points.',
        'p_6' => 'For each position you drop, 1 point is deducted, so:',
        'p_7' => '1st place 10 points, 2nd place 9 points, etc.',
        
    );
}
?>
