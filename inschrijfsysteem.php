<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="nl"> 
<head>
    <title>VISTA Kart App</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css/inschrijven.css'>
</head>
<body?>
    
    <!--preload de plek voor de header-->
    <div id="preloader"></div>
    <!--hij laat de header dynamisch in-->
    <div id="header-placeholder"></div>
    <!--import header-footer js-->
    <script src="./header-footer/header-footer.js"></script>
    <!--import header-footer css-->
    <link rel="stylesheet" href="header-footer/header-footer.css">

    <br><a href="?lang=en" id='language' class='en'>EN</a>  |<a href="?lang=nl" id='language'>NL</a>
              
            <form action="action_page.php" method="post">
            <img src="assets/inschrijven.png" alt="avatar">
            <h2><?php echo $lang['form_title']; ?></h2>
            
            <label for="name"><?php echo $lang['name'];?></label>
            <input type="text" name="naam" required>

            <label for="last name"><?php echo $lang['last_name'];?></label>
            <input type="text" name="achternaam" required>

            <label for="email"><?php echo $lang['email'];?></label>
            <input type="email" name="email" required>

            <!-- Hier verschijnt de foutmelding als de e-mail onjuist is -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email'): ?>
             <p style="color:red; text-align:center;"><?php echo $lang['invalid_email'];?></p>
            <?php endif; ?>
            <!-- Hier verschijnt de foutmelding als de e-mail al bestaat -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
            <p style="color:red; text-align:center;"><?php echo $lang['email_exists'];?></p>
            <?php endif; ?>

             <input type="submit" name="Submit" value=<?php echo $lang['button'];?> class='submit'>
            </form>
            </body>
           </html>