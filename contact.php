<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/mainstyle.css">
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

    <section class="contact-section">
        <h1>Contact</h1>
        <div class="section-card">
            <div class="card">
                <img src="img/powerarea2.png" alt="--race photo">
                <h2>ContactInfo</h2>
                <p class="GegevensAlinea">Stuur een mail:</p>
                <p><a href="mailto:516872@vistacollege.nl">516872@vistacollege.nl</a></p>
                <p class="GegevensAlinea">Bel Ons:</p>
                <p>+31 06 12 34 56 78</p>
                <div class="ContactForm">
                    <h2>Bericht ons</h2>
                    <form action="https://formspree.io/f/xkgwdlnp" method="POST">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
        
                        <button type="submit">Stuur bericht</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?> 

</body>
</html>
