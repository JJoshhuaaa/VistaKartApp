<?php 
include 'config.php';

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $wachtwoord = mysqli_real_escape_string($link, $_POST['wachtwoord']); 

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
    } 
    // Sluiten van de databaseverbinding
    mysqli_close($link);
}
?>
