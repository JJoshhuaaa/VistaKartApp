<?php include 'lang_prijzen.php'; ?>
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
    <div id="preloader"></div>
    <div id="header-placeholder"></div>
    <script src="./header-footer/header-footer.js"></script>
    <link rel="stylesheet" href="header-footer/header-footer.css">
<<<<<<<<< Temporary merge branch 1
    
    <br><a href="?lang=en" id='language' class='en'>EN</a>|<a href="?lang=nl" id='language' class="nl">NL</a>
>>>>>>> 065609c10fe7013cb78e3485ef9511211df2f52f
    <section class="pricing-section">
        <h1><?php echo $language["heading"]; ?></h1>
        
        <div class="pricing-cards">
            <div class="card">
                <h2><?php echo $language["secondPlace"]; ?></h2>
                <img src="img/2nd.png" loading="lazy" alt="Zilveren medaille">
                <button data-modal="modal-2"><?php echo $language["viewPrize"]; ?></button>
            </div>
            <div class="card">
                <h2><?php echo $language["firstPlace"]; ?></h2>
                <img src="img/1st.png" loading="lazy" alt="Champion Cup">
                <button data-modal="modal-1"><?php echo $language["viewPrize"]; ?></button>
            </div>
            <div class="card">
                <h2><?php echo $language["thirdPlace"]; ?></h2>
                <img src="img/3rd.png" loading="lazy" alt="Bronzen medaille">
                <button data-modal="modal-3"><?php echo $language["viewPrize"]; ?></button>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?> 

    <!-- Модальные окна для призов -->
    <div id="modal-1" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-1">&times;</span>
            <img src="img/1.png" loading="lazy" alt="">
            <h2><?php echo $language["firstPrize"]; ?></h2>
            <p><?php echo $language["firstPrizeText"]; ?></p>
        </div>
    </div>
    
    <div id="modal-2" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-2">&times;</span>
            <img src="img/2.png" loading="lazy" alt="">
            <h2><?php echo $language["secondPrize"]; ?></h2>
            <p><?php echo $language["secondPrizeText"]; ?></p>
        </div>
    </div>
    
    <div id="modal-3" class="modal">
        <div class="modal-content">
            <span class="close" data-modal="modal-3">&times;</span>
            <img src="img/3.png" loading="lazy" alt="">
            <h2><?php echo $language["thirdPrize"]; ?></h2>
            <p><?php echo $language["thirdPrizeText"]; ?></p>
        </div>
    </div>
</body>
</html>
