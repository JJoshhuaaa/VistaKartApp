<?php
    include "../database/config.php";

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

if (empty($name) || empty($email) || empty($message)) {
    die("Please fill in all fields.");
}

$sql = "INSERT INTO berichten (name, email, message) VALUES (?, ?, ?)";
$stmt = $link->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $link->error);
}

$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    header("Location: ../contact.php");
    $stmt->close();
    $link->close();
    exit();
} else {
    $stmt->close();
    $link->close();
    die("Error: " . $stmt->error);
}



