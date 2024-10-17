<?php include './handlers/languageHandler.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link rel="stylesheet" href="./css/info.css">
    <title>Info</title>
</head>
<body>
    <!--import header css-->
    <link rel="stylesheet" href="header-footer/header.css">

    <?php include './header-footer/header.php'?>
    <!--info-->
    <section class="info-details">
        <h1><?php echo $languagePackPage['h1'];?></h1>
        <div class="container">
            <div class="info-wrapper">
                <div class="info-image">
                    <img src="img\powerarea2.png" alt="Kart Toernooi Info" />
                </div>
                <div class="info-content">
                    <div class="info-box">
                        <h2 id="info_h2"><?php echo $languagePackPage['locatie'];?></h2>
                        <p><?php echo $languagePackPage['p_1'];?></p>
                    </div>
                    <div class="info-box">
                        <h2 id="info_h2"><?php echo $languagePackPage['teams_en_wedstrijden'];?></h2>
                        <p><?php echo $languagePackPage['p_2'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Nieuwe sectie: Tijdschema -->
    <section class="schedule-section">
        <div class="container">
            <h2><?php echo $languagePackPage['tijdschema'];?></h2>
            <table class="schedule-table">
                <tr>
                    <th><?php echo $languagePackPage['th_1'];?></th>
                    <th><?php echo $languagePackPage['th_2'];?></th>
                </tr>
                <tr>
                    <td>09:30 - 10:00</td>
                    <td><?php echo $languagePackPage['td_1'];?></td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td><?php echo $languagePackPage['td_2'];?></td>
                </tr>
                <tr>
                    <td>11:00 - 12:00</td>
                    <td><?php echo $languagePackPage['td_3'];?></td>
                </tr>
                <tr>
                    <td>12:00 - 12:30</td>
                    <td><?php echo $languagePackPage['td_4'];?></td>
                </tr>
                <tr>
                    <td>12:30 - 13:30</td>
                    <td><?php echo $languagePackPage['td_5'];?></td>
                </tr>
                <tr>
                    <td>13:30 - 14:00</td>
                    <td><?php echo $languagePackPage['td_6'];?></td>
                </tr>
            </table>
        </div>
    </section>

    <!-- Nieuwe sectie: Regels -->
    <section class="rules-section">
        <div class="container">
            <h2><?php echo $languagePackPage['regels'];?></h2>
            <ul class="rules-list">
                <li><?php echo $languagePackPage['li_1'];?></li>
                <li><?php echo $languagePackPage['li_2'];?></li>
                <li><?php echo $languagePackPage['li_3'];?></li>
                <li><?php echo $languagePackPage['li_4'];?></li>
                <li><?php echo $languagePackPage['li_5'];?></li>
                <li><?php echo $languagePackPage['li_6'];?></li>
                <li><?php echo $languagePackPage['li_7'];?></li>
            </ul>
        </div>
    </section>
    <?php include 'header-footer/footer.php'; ?> 
</body>
</html>