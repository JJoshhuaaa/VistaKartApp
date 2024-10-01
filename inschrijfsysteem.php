<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="inschrijfsysteem.css" rel="stylesheet">
    </head>
    <body>
    <?php
    
    ?>
    
     <form action="action_page.php" method="post">
     <div class="imgcontainer">
     <img src="assets/login-avatar.png" alt="Avatar" class="avatar">
      <h2>Log In Op Uw Account</h2>
      </div>

     <div class="container">
     <label for="email">E-mail:</label>
     <input type="text" name="email" required>

     <label for="psw">Wachtwoord:</label>
     <input type="password" name="psw" required>
     </div>
     </form>
     <button type="submit" class='submit'>Login</button><br>
     <button type="button" class="account">Maak Account</button><span>OR</span>
     <button class="psw">Vergeet Wachtwoord</button>
    </body>
    </html>