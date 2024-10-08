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

    <div class="center">
        <div class="frontpage-container">
            <div class="text-section">
                <h1>HET SPANNENSTE KARTTOERNOOI</h1>
                <p>Schrijf je nu in voor een onvergetelijke ervaring vol snelheid en competitie. Alleen de snelste wint!</p>
                <a href="inschrijven.php" class="btn-inschrijven">Schrijf je nu in</a>

            </div>
            <div class="image-section">
                <img src="img/front.png" alt="Abstract Design" class="abstract-image">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?> 
</body>
</html>