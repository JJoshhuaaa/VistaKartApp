<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/prijzen.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Karting Prijzen</title>
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

    <section class="pricing-section">
        <h1>Karting Prijzen</h1>
        <div class="pricing-cards">
            <div class="card">
                <h2>2e plaats</h2>
                <img src="img/2nd.jpeg" alt="Zilveren medaille">
                <button data-modal="modal-2">Kijk naar de prijs</button>
            </div>
            <div class="card">
                <h2>1e plaats</h2>
                <img src="img/1st.png" alt="Champion Cup">
                <button data-modal="modal-1">Kijk naar de prijs</button>
            </div>
            <div class="card">
                <h2>3e plaats</h2>

                <img src="img/3d.jpg" alt="Bronzen medaille">
                <button data-modal="modal-3">Kijk naar de prijs</button>
            </div>
        </div>
    </section>
    

    <div id="modal-1" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-1">&times;</span>
            <img src="img/cup.png" alt="">
            <h2>Hoofdprijs: 1000 euro in contanten en de kampioensbeker</h2>
            <p> De winnaar van het toernooi ontvangt de hoofdprijs van 1000 euro en de kampioensbeker, die uw overwinning en vaardigheden op de baan symboliseert. Deze beker wordt een blijvende herinnering en kan met trots worden getoond. Daarnaast krijgt de winnaar de mogelijkheid om deel te nemen aan VIP-karting evenementen in de toekomst. De prijs voor de eerste plaats is niet alleen een financiële beloning, maar ook een erkenning van uw vaardigheden en snelheid.</p>
        </div>
    </div>
    
    <div id="modal-2" class="modal">
        <div class="modal-content">
            <img src="img/2nd.jpg" alt="">
            <span class="close" data-modal="modal-2">&times;</span>
            <h2>Prijs: 500 euro in contanten en een zilveren medaille</h2>
            <p>De tweede plaats ontvangt 500 euro en een zilveren medaille. Deze prijs getuigt van uw uitstekende vaardigheden en uw verlangen om op hoog niveau te concurreren. De zilveren medaille is een teken dat u tot het uiterste heeft gestreden en opmerkelijke resultaten heeft behaald door tot de beste rijders van het toernooi te behoren. Deze prijs is een geweldige bevestiging van uw bekwaamheid en uitstekende vorm tijdens de competitie.</p>
        </div>
    </div>
    
    <div id="modal-3" class="modal">
        <div class="modal-content">
            <img src="img/3.jpg" alt="">
            <span class="close" data-modal="modal-3">&times;</span>
            <h2>Prijs: 250 euro in contanten en een bronzen medaille.</h2>
            <p>De prijs voor de derde plaats bestaat uit 250 euro en een bronzen medaille. Dit is een beloning voor degenen die indrukwekkende resultaten hebben laten zien tijdens het toernooi, waarbij ze moeilijke races en sterke tegenstanders hebben overwonnen. De bronzen medaille is een symbool van doorzettingsvermogen en het behalen van hoge resultaten, die u met trots aan uw vrienden en familie kunt laten zien. Deze prijs is een bewijs van uw buitengewone inspanningen en uw streven naar overwinning.</p>
        </div>
    </div>
    
    
    <?php include 'footer.php'; ?> 

</body>
<!--Nooit css of js in de html doen-->

</html>
