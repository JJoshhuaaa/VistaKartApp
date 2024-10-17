<?php
include 'config.php'; // Zorg ervoor dat je 'config.php' de juiste databaseverbinding heeft

$error_message = "";

// Controleren of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $naam = mysqli_real_escape_string($link, $_POST['naam']); 
    $achternaam = mysqli_real_escape_string($link, $_POST['achternaam']); 
    $email = mysqli_real_escape_string($link, $_POST['email']);
   
    //check of het email formaat correct is met regex
    if(!preg_match('/(?:[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/m', $email)) {
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
        // Uitvoeren van de query en controleren op succes
        if ($link->query("INSERT INTO leerlingen (naam, achternaam, email) VALUES ('$naam', '$achternaam' ,'$email')")) {
            $depth = 0;
            $leerlingId = $link->insert_id;

            repeat:
            $poules = $link->query('SELECT * FROM poules')->fetch_all(MYSQLI_ASSOC);
            $assignedPoule = false;
            for($i = 0; $i < count($poules); $i++) {
                $pouleMembers = json_decode($poules[$i]['members']);
                if(count($pouleMembers) < 4) {
                    array_push($pouleMembers, $leerlingId);
                    
                    $prep = $link->prepare('UPDATE poules SET members=? WHERE id=?');
                    $prep->bind_param('si', $jsonArr, $poules[$i]['id']);
                    $jsonArr = json_encode($pouleMembers);
                    
                    if(!$prep->execute())
                        continue;

                    $assignedPoule = true;
                    break;
                }
            }

            if(!$assignedPoule) {
                $pouleCount = intval($link->query('SELECT count(*) AS count FROM poules')->fetch_assoc()['count']) + 1;

                $statement = $link->prepare('INSERT INTO poules (naam) VALUES (?)');
                $statement->bind_param('s', $name);
                $name = 'poule #' . $pouleCount;
                
                $statement->execute();

                if($depth++ < 5)
                    goto repeat;
            }
            
            // Registratie geslaagd, redirect naar prijzenpagina
            header("Location: prijzen.php");
            exit();
        } else {
            echo "Er is iets misgegaan: " . mysqli_error($link);
        }
    }
}

// Sluiten van de databaseverbinding
mysqli_close($link);
?>



