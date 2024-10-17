<?php include './handlers/languageHandler.php'?>
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
    <!--import header css-->
    <link rel="stylesheet" href="header-footer/header.css">

    <?php include './header-footer/header.php'?>

    <div class="center">
        <div class="frontpage-container">
            <div class="text-section">
                <h1><?php echo $languagePackPage['karttoernooi'];?></h1>
                <p><?php echo $languagePackPage['p'];?></p>
                <a href="inschrijf.php" class="btn-inschrijven"><?php echo $languagePackPage['inschrijven'];?></a>

            </div>
            <div class="image-section">
                <img src="img/front.png" alt="Abstract Design" class="abstract-image">
            </div>
        </div>
    </div>
    <?php include 'header-footer/footer.php'; ?> 
</body>
</html>