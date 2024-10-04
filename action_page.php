<?php
// Verbinding maken met de database
include 'config.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']);
    $email = mysqli_real_escape_string($link, $_POST['email']);

    $allowed_emails = [
        '518997@vistacollege.nl',
        '517255@vistacollege.nl',
        '516872@vistacollege.nl',
        '510586@vistacollege.nl',
        '92015@vistacollege.nl'
    ];

    // Controleer of het ingevoerde e-mailadres in de lijst van toegestane e-mails staat
    if (!in_array($email, $allowed_emails)) {
        // Redirect naar formulierpagina met foutmelding
        header("Location: inschrijfsysteem.php?error=invalid_email");
        exit();
    } else {
        // Controleer of het e-mailadres al bestaat in de database
        $check_email_query = "SELECT * FROM leerlingen WHERE email = '$email'";
        $result = mysqli_query($link, $check_email_query);

        if (mysqli_num_rows($result) > 0) {
            // E-mail bestaat al, redirect naar formulierpagina met foutmelding
            header("Location: inschrijfsysteem.php?error=email_exists");
            exit();
        } else {
            // SQL-query om gegevens in de database in te voegen
            $sql = "INSERT INTO leerlingen (naam, email) VALUES ('$naam', '$email')";

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
}
?>
