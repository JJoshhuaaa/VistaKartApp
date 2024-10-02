<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Vista Kart 2024 Toernooi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="inschrijfsysteem.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="logo">
                        <img src="img/vistalogo.png" alt="Karting Logo">
                    </div>
                </div>
                <div class="col-6">
                    <nav class="nav-menu text-right">
                        <a href="prijzen.html">Prijzen</a>
                        <a href="#">Toernooi</a>
                        <a href="contact.html">Contact</a>
                        <a href="inschrijfsysteem.php">Aanmelden</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <form action="action_page.php" method="post" class="text-center mt-5">
            <div class="imgcontainer">
                <img src="assets/inschrijven.png" alt="Avatar" class="avatar">
                <h2>Registreer voor het Vista Kart 2024 toernooi</h2>
            </div>

            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="psw">Wachtwoord:</label>
                <input type="password" class="form-control" name="psw" required>
            </div>

            <button type="submit" name="Submit" class="btn btn-primary">Registreren</button>
        </form>
    </div>
</body>
</html>

    
     