<?php
include 'config.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

$error_message = "";

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']); 
    $achternaam = mysqli_real_escape_string($link, $_POST['achternaam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);
   

    // Lijst van toegestane e-mails
    $allowed_emails = [
        '518997@vistacollege.nl',
        '517255@vistacollege.nl',
        '516872@vistacollege.nl',
        '510586@vistacollege.nl',
        '92015@vistacollege.nl'
    ];

    if (!in_array($email, $allowed_emails)) {
        header("Location: inschrijfsysteem.php?error=invalid_email");
        exit();
    }

    // Controleer of het e-mailadres al bestaat in de database
    $check_email_query = "SELECT * FROM leerlingen WHERE email = '$email'";
    $result = mysqli_query($link, $check_email_query);

    if (mysqli_num_rows($result) > 0) {
        // E-mail bestaat al, redirect naar formulierpagina met foutmelding
        header("Location: inschrijfsysteem.php?error=email_exists");
        exit();
    } else {
        // SQL-query om gegevens in de database in te voegen
        $sql = "INSERT INTO leerlingen (naam, achternaam, email) VALUES ('$naam', '$achternaam' ,'$email')";

        // Uitvoeren van de query en controleren op succes
        if (mysqli_query($link, $sql)) {
            // Registratie geslaagd, redirect naar prijzenpagina
            header("Location: prijzen.html");
            exit();
        } else {
            echo "Er is iets misgegaan: " . mysqli_error($link);
        }
    }
}

// Sluiten van de databaseverbinding
mysqli_close($link);
?>



