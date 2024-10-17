<?php include './handlers/languageHandler.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/prijzen.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="./handlers/modalHandler.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Karting Prijzen</title>
</head>
<body>
    <!--import header css-->
    <link rel="stylesheet" href="header-footer/header.css">

    <?php include './header-footer/header.php'?>
        
        <section class="pricing-section">
            <h1><?php echo $languagePackPage["heading"]; ?></h1>

            <div class="pricing-cards">
                <div class="card">
                    <h2><?php echo $languagePackPage["secondPlace"]; ?></h2>
                    <img src="img/2nd.png" loading="lazy" alt="Zilveren medaille">
                    <button data-modal="modal-2"><?php echo $languagePackPage["viewPrize"]; ?></button>
                </div>
                <div class="card">
                    <h2><?php echo $languagePackPage["firstPlace"]; ?></h2>
                    <img src="img/1st.png" loading="lazy" alt="Champion Cup">
                    <button data-modal="modal-1"><?php echo $languagePackPage["viewPrize"]; ?></button>
                </div>
                <div class="card">
                    <h2><?php echo $languagePackPage["thirdPlace"]; ?></h2>
                    <img src="img/3rd.png" loading="lazy" alt="Bronzen medaille">
                    <button data-modal="modal-3"><?php echo $languagePackPage["viewPrize"]; ?></button>
                </div>
        </div>
    </section>
    <?php include 'header-footer/footer.php'; ?> 

    <div id="modal-1" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-1">&times;</span>
            <img src="img/1.png" loading="lazy" alt="">
            <h2><?php echo $languagePackPage["firstPrize"]; ?></h2>
            <p><?php echo $languagePackPage["firstPrizeText"]; ?></p>
        </div>
    </div>
    
    <div id="modal-2" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-2">&times;</span>
            <img src="img/2.png" loading="lazy" alt="">
            <h2><?php echo $languagePackPage["secondPrize"]; ?></h2>
            <p><?php echo $languagePackPage["secondPrizeText"]; ?></p>
        </div>
    </div>
    
    <div id="modal-3" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-3">&times;</span>
            <img src="img/3.png" loading="lazy" alt="">
            <h2><?php echo $languagePackPage["thirdPrize"]; ?></h2>
            <p><?php echo $languagePackPage["thirdPrizeText"]; ?></p>
        </div>
    </div>
</body>
</html>