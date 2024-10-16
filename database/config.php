<?php
// Databasegegevens
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'vista_toernooi'; // Zorg dat je de naam van de database correct spelt

// Verbinding maken met de database
$link = mysqli_connect($host, $user, $password, $db);

// Controleer de verbinding
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
