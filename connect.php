<?php
$mysqli = new mysqli("localhost", "root", "", "vistakart");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
