<?php include 'lang_index.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>VISTA Kart App</title>
</head>
<body>
    <!--preload de plek voor de header-->
    <div id="preloader"></div>
    <!--hij laat de header dynamisch in-->
    <div id="header-placeholder"></div>
    <!--import header-footer js-->
    <script src="./header-footer/header-footer.js"></script>
    <!--import header-footer css-->
    <link rel="stylesheet" href="header-footer/header-footer.css">

    <br><a href="?lang=en" id='language' class='en'>EN</a>  |<a href="?lang=nl" id='language'>NL</a>

    <div class="center">
        <div class="frontpage-container">
            <div class="text-section">
                <h1><?php echo $lang['karttoernooi'];?></h1>
                <p><?php echo $lang['p'];?></p>
                <a href="inschrijfsysteem.php" class="btn-inschrijven"><?php echo $lang['inschrijven'];?></a>

            </div>
            <div class="image-section">
                <img src="img/front.png" alt="Abstract Design" class="abstract-image">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?> 
</body>
</html>