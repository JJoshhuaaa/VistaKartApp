<?php 
include 'config.php';

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);

        // SQL-query om gegevens in de database in te voegen
        $sql = "INSERT INTO leerlingen (naam, email) VALUES ('$naam', '$email')";
        
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
