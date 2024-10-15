<?php include 'lang_contact.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mainstyle.css">
    <script defer src="contact_switch.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Contact</title>
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

    <section class="contact-section">
        <h1><?php echo $lang['form_title']; ?></h1>
        <div class="section-card">
            <div class="card">
                <img src="img/powerarea2.png" alt="--race photo">
                <h2><?php echo $lang['contactinfo'];?></h2>
                <p class="GegevensAlinea"><?php echo $lang['stuur_email'];?></p>
                <p><a href="mailto:516872@vistacollege.nl">516872@vistacollege.nl</a></p>
                <p class="GegevensAlinea"><?php echo $lang['bel_ons'];?></p>
                <p>+31 06 12 34 56 78</p>
                <div class="ContactForm">
                    <h2><?php echo $lang['bericht_ons'];?></h2>
                    <form id="contactForm" action="contact_form.php" method="POST">
                        <label for="name"><?php echo $lang['naam'];?></label>
                        <input type="text" id="name" name="name" required>
                        <label for="email"><?php echo $lang['email'];?></label>
                        <input type="email" id="email" name="email" required>
                        <label for="message"><?php echo $lang['bericht'];?></label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                    <button type="submit"><?php echo $lang['stuur_bericht'];?></button>
                </form>
            </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?> 

</body>
</html>
