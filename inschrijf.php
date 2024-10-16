<?php include 'languageHandler.php'?>
<!DOCTYPE html>
<html lang="nl"> 
<head>
    <title>VISTA Kart App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css/mainstyle.css'>
    <link rel='stylesheet' href='css/inschrijven.css'>
</head>
<body>
    <!--import header css-->
    <link rel="stylesheet" href="header-footer/header.css">

    <?php include './header-footer/header.php'?>

    <script src="./languageCookieHandler.js"></script>
    <br><a onclick='setLanguageCookie("en")' id='language' class='en'>EN</a>  |<a onclick='setLanguageCookie("nl")' id='language'>NL</a>
              
    <form action="action_page.php" method="post">
        <img src="img/inschrijven.png" alt="avatar">
        <h2><?php echo $languagePackPage['form_title']; ?></h2>

        <label for="name"><?php echo $languagePackPage['name']; ?></label>
        <input type="text" name="naam" required>

        <label for="last name"><?php echo $languagePackPage['last_name']; ?></label>
        <input type="text" name="achternaam" required>

        <label for="email"><?php echo $languagePackPage['email']; ?></label>
        <input type="email" name="email" required>

        <!-- Hier verschijnt de foutmelding als de e-mail onjuist is -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email'): ?>
         <p style="color:red; text-align:center;"><?php echo $languagePackPage['invalid_email']; ?></p>
        <?php endif; ?>
        <!-- Hier verschijnt de foutmelding als de e-mail al bestaat -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
        <p style="color:red; text-align:center;"><?php echo $languagePackPage['email_exists']; ?></p>
        <?php endif; ?>

        <input type="submit" name="Submit" value="<?php echo $languagePackPage['button']; ?>" class='submit'>
    </form>

    <?php include 'header-footer/footer.php'; ?> 
</body>
</html>