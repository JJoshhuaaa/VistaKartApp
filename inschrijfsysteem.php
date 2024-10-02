<?php 
include 'config.php'
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Vista Kart 2024 Toernooi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='inschrijfsysteem.css'>
</head>
<body>
    <form action="prijzen.html" method="post">
        <div class="imgcontainer">
            <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
            <h2>Registreer voor het Vista Kart 2024 toernooi</h2>
        </div>
    
        <div class="container">
            <label for="name">Naam:</label>
            <input type="text" name="name" required>
    
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
            
            <label for="psw">Wachtwoord:</label>
            <input type="password" name="psw" required>
        </div>
        <input type="submit" name="Submit" value="Registreren" class='submit'>
    </form>
</body>
</html>

    
     