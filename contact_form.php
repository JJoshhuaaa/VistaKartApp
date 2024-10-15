<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        // Haal het ID van het nieuw toegevoegde bericht op
        $bericht_id = $stmt->insert_id;
        $melding = "Nieuw bericht van $name: $message";
        $sqlMelding = "INSERT INTO meldingen (bericht_id, melding) VALUES (?, ?)";
        $stmtMelding = $link->prepare($sqlMelding);
        
        if ($stmtMelding) {
            $stmtMelding->bind_param("is", $bericht_id, $melding);
            $stmtMelding->execute();
            $stmtMelding->close();
        }

        header("Location: /VistaKartApp/contact.php?status=success");
        exit();
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
    $link->close();
} else {
    echo "Invalid request method.";
}
