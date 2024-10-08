<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'nl'; // Standaardtaal

$texts = [
    'nl' => [
        'title' => 'Vista Kart 2024 Toernooi',
        'register' => 'Registreer voor het Vista Kart 2024 toernooi',
        'name' => 'Naam:',
        'lastname' => 'Achternaam:',
        'email' => 'E-mail:',
        'invalid_email' => 'Onjuiste e-mail.',
        'email_exists' => 'Dit e-mailadres is al geregistreerd.',
        'submit' => 'Inschrijven',
        'change_lang' => 'Verander taal<?php
include 'lang.php'; // Inclusief de taalvariabelen
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <title><?php echo $texts[$lang]['title']; ?></title>
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
        <div class="imgcontainer">
            <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
            <h2><?php echo $texts[$lang]['register']; ?></h2>

            <label for="name"><?php echo $texts[$lang]['name']; ?></label>
            <input type="text" name="naam" required>

            <label for="last name"><?php echo $texts[$lang]['lastname']; ?></label>
            <input type="text" name="achternaam" required>

            <label for="email"><?php echo $texts[$lang]['email']; ?></label>
            <input type="email" name="email" required>

            <!-- Hier verschijnt de foutmelding als de e-mail onjuist is -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email'): ?>
                <p style="color:red; text-align:center;"><?php echo $texts[$lang]['invalid_email']; ?></p>
            <?php endif; ?>
            <!-- Hier verschijnt de foutmelding als de e-mail al bestaat -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
                <p style="color:red; text-align:center;"><?php echo $texts[$lang]['email_exists']; ?></p>
            <?php endif; ?>

            <input type="submit" name="Submit" value="<?php echo $texts[$lang]['submit']; ?>" class='submit'>
        </div>
    </form>

    <!-- Taalwisselknoppen -->
    <div>
        <a href="?lang=nl"><?php echo $texts[$lang]['change_lang']; ?> Nederlands</a> | 
        <a href="?lang=en"><?php echo $texts[$lang]['change_lang']; ?> English</a>
    </div>
</body>
</html>
<?php
include 'lang.php'; // Inclusief de taalvariabelen
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <title><?php echo $texts[$lang]['title']; ?></title>
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
        <div class="imgcontainer">
            <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
            <h2><?php echo $texts[$lang]['register']; ?></h2>

            <label for="name"><?php echo $texts[$lang]['name']; ?></label>
            <input type="text" name="naam" required>

            <label for="last name"><?php echo $texts[$lang]['lastname']; ?></label>
            <input type="text" name="achternaam" required>

            <label for="email"><?php echo $texts[$lang]['email']; ?></label>
            <input type="email" name="email" required>

            <!-- Hier verschijnt de foutmelding als de e-mail onjuist is -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid_email'): ?>
                <p style="color:red; text-align:center;"><?php echo $texts[$lang]['invalid_email']; ?></p>
            <?php endif; ?>
            <!-- Hier verschijnt de foutmelding als de e-mail al bestaat -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists'): ?>
                <p style="color:red; text-align:center;"><?php echo $texts[$lang]['email_exists']; ?></p>
            <?php endif; ?>

            <input type="submit" name="Submit" value="<?php echo $texts[$lang]['submit']; ?>" class='submit'>
        </div>
    </form>

    <!-- Taalwisselknoppen -->
    <div>
        <a href="?lang=nl"><?php echo $texts[$lang]['change_lang']; ?> Nederlands</a> | 
        <a href="?lang=en"><?php echo $texts[$lang]['change_lang']; ?> English</a>
    </div>
</body>
</html>
:',
    ],
    'en' => [
        'title' => 'Vista Kart 2024 Tournament',
        'register' => 'Register for the Vista Kart 2024 tournament',
        'name' => 'Name:',
        'lastname' => 'Last Name:',
        'email' => 'E-mail:',
        'invalid_email' => 'Invalid email.',
        'email_exists' => 'This email address is already registered.',
        'submit' => 'Register',
        'change_lang' => 'Change language:',
    ],
];
?>
