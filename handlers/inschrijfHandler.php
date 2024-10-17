<?php
require '../database/config.php';

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

$name = isset($_POST['naam']) ? $_POST['naam'] : '';
$surname = isset($_POST['achternaam']) ? $_POST['achternaam'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

if (empty($name) || empty($surname) || empty($email)) {
    die("Please fill in all fields.");
}

$domain = explode('@', $email);

if($domain[count($domain) - 1] != "vistacollege.nl")
{
    header("Location: ../inschrijf.php?error=invalid_email");
    exit();
}


$sql = "SELECT * FROM leerlingen WHERE email = ?";
$stmt = $link->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $link->error);
}

$stmt->bind_param("s", $email);

if(!$stmt->execute())
{
    die("Prepare failed: " . $link->error);
}

if($stmt->fetch() > 0)
{
    header("Location: ../inschrijf.php?error=email_exists");
    $stmt->close();
    $link->close();
    exit();
}

$sql = "INSERT INTO leerlingen (naam, achternaam, email) VALUES (?,?,?)";
$stmt = $link->prepare($sql);

$stmt->bind_param("sss", $name, $surname, $email);

if ($stmt->execute()) {
    header("Location: ../inschrijf.php");
    $stmt->close();
    $link->close();
    exit();
} else {
    $stmt->close();
    $link->close();
    die("Error: " . $stmt->error);
}




?>