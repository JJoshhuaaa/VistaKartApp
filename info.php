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
            <h2><?php echo $lang['tijdschema'];?></h2>
            <table class="schedule-table">
                <tr>
                    <th><?php echo $lang['th_1'];?></th>
                    <th><?php echo $lang['th_2'];?></th>
                </tr>
                <tr>
                    <td>09:30 - 10:00</td>
                    <td><?php echo $lang['td_1'];?></td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td><?php echo $lang['td_2'];?></td>
                </tr>
                <tr>
                    <td>11:00 - 12:00</td>
                    <td><?php echo $lang['td_3'];?></td>
                </tr>
                <tr>
                    <td>12:00 - 12:30</td>
                    <td><?php echo $lang['td_4'];?></td>
                </tr>
                <tr>
                    <td>12:30 - 13:30</td>
                    <td><?php echo $lang['td_5'];?></td>
                </tr>
                <tr>
                    <td>13:30 - 14:00</td>
                    <td><?php echo $lang['td_6'];?></td>
                </tr>
            </table>
        </div>
    </section>

    <!-- Nieuwe sectie: Regels -->
    <section class="rules-section">
        <div class="container">
            <h2>Regels</h2>
            <ul class="rules-list">
                <li><?php echo $lang['li_1'];?></li>
                <li><?php echo $lang['li_2'];?></li>
                <li><?php echo $lang['li_3'];?></li>
                <li><?php echo $lang['li_4'];?></li>
                <li><?php echo $lang['li_5'];?></li>
                <li><?php echo $lang['li_6'];?></li>
                <li><?php echo $lang['li_7'];?></li>
            </ul>
        </div>
    </section>
    <?php include 'footer.php'; ?> 
</body>
</html>