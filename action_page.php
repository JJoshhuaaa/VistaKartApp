<?php 
include 'config.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

$error_message = "";

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $wachtwoord = mysqli_real_escape_string($link, $_POST['wachtwoord']); 

    // Controleer of het e-mailadres eindigt op '@vistacollege.nl'
    if (strpos($email, '@vistacollege.nl') !== false) {
        // Wachtwoord versleutelen
        $hashed_password = password_hash($wachtwoord, PASSWORD_DEFAULT); 

        // SQL-query om gegevens in de database in te voegen
        $sql = "INSERT INTO leerlingen (naam, email, wachtwoord) VALUES ('$naam', '$email', '$hashed_password')";
        
        // Uitvoeren van de query en controleren op succes
        if (mysqli_query($link, $sql)) {
            // Redirect naar de prijzenpagina na succesvolle registratie
            header("Location: prijzen.html");
            exit();
        } else {
            echo "Er is iets misgegaan: " . mysqli_error($link);
        }
    } else {
        // Redirect terug naar het formulier met een foutmelding
        header("Location: inschrijfsysteem.php?error=Onjuiste e-mail, alleen Vista College e-mail toegestaan.");
        exit();
    }

    // Sluiten van de databaseverbinding
    mysqli_close($link);
}


?>

