<?php
include 'database/config.php';
include 'poule_logic.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

$error_message = "";

// Controleren of het formulier is verzonden
if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

// Gegevens ophalen uit het formulier
$naam = mysqli_real_escape_string($link, $_POST['naam']); 
$achternaam = mysqli_real_escape_string($link, $_POST['achternaam']); 
$email = mysqli_real_escape_string($link, $_POST['email']);

$domain = explode('@', $email);

if($domain[count($domain) - 1] != "vistacollege.nl")
{
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
        header("Location: prijzen.php");
        exit();
    } else {
        echo "Er is iets misgegaan: " . mysqli_error($link);
    }
}


// Sluiten van de databaseverbinding
mysqli_close($link);
?>



