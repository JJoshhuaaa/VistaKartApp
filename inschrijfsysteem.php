     <!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='style.css'>
</head>
<body>
     <?php
     // Databaseverbinding
     $host = 'localhost';
     $db = 'vista toernooi';
     $user = 'root';
     $password = '';
     $conn = new mysqli($host, $user, $password, $db);
        ?>
        
    <form action="action_page.php" method="post">
        <div class="imgcontainer">
            <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
            <h2>Registreer voor het Vista Kart 2024 toernooi</h2>
        </div>
    
        <div class="container">
            <label for="email">Naam:</label>
            <input type="text" name="email" required>
    
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
            <label for="psw">Wachtwoord:</label>
            <input type="password" name="psw" required>
        </div>
    </form>
    <button type='register' class='register'>Registreren</button>
    </body>
    
    </html>
    
    
     