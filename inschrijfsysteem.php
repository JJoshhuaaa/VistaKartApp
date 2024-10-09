<!DOCTYPE html>
<html lang="nl">
<head>
    <title>VISTA Kart App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css/inschrijfsysteem.css'>
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

    <form action="action_page.php" method="post">
            <img src="assets/inschrijven.png" alt="avatar">
            <h2>Schrijf in voor het Vista Kart 2024 toernoo</h2>
            
            <label for="name">Naam:</label>
            <input type="text" name="naam" required>

            <label for="last name">Achternaam:</label>
            <input type="text" name="achternaam" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required>

            <!-- Hier verschijnt de foutmelding als de e-mail onjuist is -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email'): ?>
             <p style="color:red; text-align:center;">Onjuiste e-mail.</p>
            <?php endif; ?>
            <!-- Hier verschijnt de foutmelding als de e-mail al bestaat -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
            <p style="color:red; text-align:center;">Dit e-mailadres is al geregistreerd.</p>
            <?php endif; ?>

             <input type="submit" name="Submit" value="Inschrijven" class='submit'>
           
            </form>

    