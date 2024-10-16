<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'vista_toernooi';

// Create connection
$link = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
