<?php include 'lang_info.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/info.css">
    <title>Info</title>
</head>
<body>
    <!--header-->
    <!--preload de plek voor de header-->
    <div id="preloader"></div>
    <!--hij laat de header dynamisch in-->
    <div id="header-placeholder"></div>
    <!--import header-footer js-->
    <script src="./header-footer/header-footer.js"></script>
    <!--import header-footer css-->
    <link rel="stylesheet" href="header-footer/header-footer.css">

    <br><a href="?lang=en" id='language' class='en'>EN</a>  |<a href="?lang=nl" id='language'>NL</a>
    <!--info-->
    <section class="info-details">
        <h1><?php echo $lang['h1'];?></h1>
        <div class="container">
            <div class="info-wrapper">
                <div class="info-image">
                    <img src="img\powerarea2.png" alt="Kart Toernooi Info" />
                </div>
                <div class="info-content">
                    <div class="info-box">
                        <h2 id="info_h2"><?php echo $lang['locatie'];?></h2>
                        <p><?php echo $lang['p_1'];?></p>
                    </div>
                    <div class="info-box">
                        <h2 id="info_h2"><?php echo $lang['teams_en_wedstrijden'];?></h2>
                        <p><?php echo $lang['p_2'];?></p>
                        <p><?php echo $lang['p_3'];?></p>
                        <p><?php echo $lang['p_4'];?></p>
                        <p><?php echo $lang['p_5'];?></p>
                        <p><?php echo $lang['p_6'];?></p>
                        <p><?php echo $lang['p_7'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Nieuwe sectie: Tijdschema -->
    <section class="schedule-section">
        <div class="container">
            <h2>Tijdschema</h2>
            <table class="schedule-table">
                <tr>
                    <th>Tijd</th>
                    <th>Activiteit</th>
                </tr>
                <tr>
                    <td>09:30 - 10:00</td>
                    <td>Registratie & Ontvangst</td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td>Oefensessies</td>
                </tr>
                <tr>
                    <td>11:00 - 12:00</td>
                    <td>Kwalificaties</td>
                </tr>
                <tr>
                    <td>12:00 - 12:30</td>
                    <td>Pauze</td>
                </tr>
                <tr>
                    <td>12:30 - 13:30</td>
                    <td>Race</td>
                </tr>
                <tr>
                    <td>13:30 - 14:00</td>
                    <td>Prijsuitreiking & Afsluiting</td>
                </tr>
            </table>
        </div>
    </section>

    <!-- Nieuwe sectie: Regels -->
    <section class="rules-section">
        <div class="container">
            <h2>Regels</h2>
            <ul class="rules-list">
                <li>Volg de instructies van de baan-marshalls en blijf in de kart zitten, todat de marshall aangeeft dat je uit mag stappen. Dit geldt zowel op de kartbaan als in de pit</li>
                <li>Gevaarlijke rijstijlen en opzettelijke botsingen zijn ten strengste verboden!</li>
                <li>Stevig en gesloten schoeisel is verplicht (slippers en overig schoeisel zijn niet toegestaan)</li>
                <li>Sjaals, halsdoeken en stropdassen zijn niet toegestaan tijdens het karten</li>
                <li>Personen met lang haar moeten deze zo kort en stevig mogelijk vastmaken</li>
                <li>Het dragen van de veiligheidsgordel en -helm is verplicht!</li>
                <li>Bij het gebruik van een bruikleenhelm is het dragen van een balaclava verplicht</li>
            </ul>
        </div>
    </section>
    <?php include 'footer.php'; ?> 
</body>
</html>