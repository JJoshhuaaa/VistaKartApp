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
                                     // Info
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
  
                                     // Tijdschema
        'tijdschema' => 'Tijdschema', 
        'th_1' => 'Tijd',                             
        'th_2' => 'Activiteit', 
        'td_1' => 'Registratie & Ontvangst', 
        'td_2' => 'Oefensessies', 
        'td_3' => 'Kwalificaties', 
        'td_4' => 'Pauze', 
        'td_5' => 'Race', 
        'td_6' => 'Prijsuitreiking & Afsluiting', 

                                     // Regels
        'regels' => 'Regels',  
        'li_1' => 'Volg de instructies van de baan-marshalls en blijf in de kart zitten, todat de marshall aangeeft dat je uit mag stappen. Dit geldt zowel op de kartbaan als in de pit',  
        'li_2' => 'Gevaarlijke rijstijlen en opzettelijke botsingen zijn ten strengste verboden!',                             
        'li_3' => 'Stevig en gesloten schoeisel is verplicht (slippers en overig schoeisel zijn niet toegestaan)',
        'li_4' => 'Sjaals, halsdoeken en stropdassen zijn niet toegestaan tijdens het karten',
        'li_5' => 'Personen met lang haar moeten deze zo kort en stevig mogelijk vastmaken',
        'li_6' => 'Het dragen van de veiligheidsgordel en -helm is verplicht!',
        'li_7' => 'Bij het gebruik van een bruikleenhelm is het dragen van een balaclava verplicht',

    );
} else {
    $lang = array(
                                     // Info
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
             
                                        // Tijdschema
        'tijdschema' => 'Schedule',
        'th_1' => 'Time',                                 
        'th_2' => 'Activity', 
        'td_1' => 'Registration & Reception', 
        'td_2' => 'Practice Sessions', 
        'td_3' => 'Qualifications', 
        'td_4' => 'Break', 
        'td_5' => 'Race', 
        'td_6' => 'Award Ceremony & Closing', 

                                        // Regels
        'regels' => 'Rules',    
        'li_1' => 'Follow the instructions of the track marshals and stay seated in the kart until the marshal indicates you may exit. This applies both on the track and in the pit',  
        'li_2' => 'Dangerous driving styles and intentional collisions are strictly prohibited!',                             
        'li_3' => 'Sturdy, closed footwear is mandatory (slippers and other footwear are not allowed',
        'li_4' => 'Scarves, neckerchiefs, and ties are not allowed during karting',
        'li_5' => 'People with long hair must tie it up as short and securely as possible',
        'li_6' => 'Wearing the seatbelt and helmet is mandatory!',
        'li_7' => 'When using a rental helmet, wearing a balaclava is required',                            
        
    );
}
?>
