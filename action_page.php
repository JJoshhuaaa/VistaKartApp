<?php
// Verbinding maken met de database
include 'config.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

$error_message = "";



// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $name = mysqli_real_escape_string($link, $_POST['naam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['wachtwoord']); 

    if (strpos($email, '@vistacollege.nl') !== false) {
    
    // Wachtwoord versleutelen
    $hashed_password = password_hash($wachtwoord, PASSWORD_DEFAULT); 

    // SQL-query om gegevens in de database in te voegen
    $sql = "INSERT INTO leerlingen (naam, email, wachtwoord) VALUES ('$naam', '$email', '$hashed_password')";
    
    // Uitvoeren van de query en controleren op succes
    if (mysqli_query($link, $sql)) {
        echo "Registratie succesvol!"; 
        // Hier kun je een redirect doen naar bijvoorbeeld de prijzenpagina
        header("Location: prijzen.html");
        exit();
    } else {
        echo "Er is iets misgegaan: " . mysqli_error($link);
    }
}else{
     echo "<p style='color:red;'>Onjuiste e-mail, alleen Vista College e-mail toegestaan.</p>";
}

    // Sluiten van de databaseverbinding
    mysqli_close($link);
}

?>
