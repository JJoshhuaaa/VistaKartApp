<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Vista Kart 2024 Toernooi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css/inschrijfsysteem.css'> 
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/vistalogo.png" alt="Karting Logo">
        </div>
        <nav class="nav-menu">
            <a href="prijzen.html">Prijzen</a>
            <a href="#">Toernooi</a>
            <a href="contact.html">Contact</a>
            <a href="inschrijfsysteem.html">Aanmelden</a>
        </nav>
    </header>
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
            <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
            <h2>Registreer voor het Vista Kart 2024 toernooi</h2>
            <label for="name">Naam:</label>
            <input type="text" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required>

            <?php if (isset($_GET['error'])): ?>
                <p style='color:red;'><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
        
            <input type="submit" name="Submit" value="Registreren" class='submit'>
        </div>
    </form>
</body>
</html>

    
     