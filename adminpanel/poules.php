<?php 
    include("../database/config.php");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/poule_card.css">
</head>
<body>  
    <main class="main-content">
        <h1>Poule</h1>
        <hr>

        <form class='genButtonForm' action='./adminHandlers/poulesAdminHandler.php' method='POST'>
            <button class='generateButton' type='submit' name='generate_new_poules' value='poule'>Genereer extra poules</button>
        </form> 
        <div class='poules-manager'>
        <?php
            $query = "SELECT p.id AS poule_id, l.naam, l.achternaam
                    FROM poule AS p
                    JOIN leerlingen AS l ON p.leerling_id = l.id
                    ORDER BY p.id";

            $result = mysqli_query($link, $query);

            if ($result) {
                // Initialize an array to organize poules
                $poules = [];

                // Fetch the data
                while ($row = mysqli_fetch_assoc($result)) {
                    // Group by poule ID
                    $poules[$row['poule_id']][] = $row;
                }

                // Generate modals
                foreach ($poules as $pouleID => $leerlingen) {
                    // Check if a winner already exists for this poule
                    $winnerCheckQuery = "SELECT l.naam, l.achternaam, pw.datum
                                        FROM poule_winnaar AS pw
                                        JOIN leerlingen AS l ON pw.leerling_id = l.id
                                        WHERE pw.poule_id = ?";
                    $winnerCheckStmt = mysqli_prepare($link, $winnerCheckQuery);
                    mysqli_stmt_bind_param($winnerCheckStmt, "i", $pouleID);
                    mysqli_stmt_execute($winnerCheckStmt);
                    mysqli_stmt_bind_result($winnerCheckStmt, $winnerName, $winnerSurname, $winnerDate);
                    $winnerFound = mysqli_stmt_fetch($winnerCheckStmt);
                    mysqli_stmt_close($winnerCheckStmt);

                    // Start rendering the modal
                    echo "<div class='poule-modal'>";
                    echo "<label>Poule {$pouleID}</label>";
                    echo "<hr>";

                    // Loop through each leerling in the current poule
                    foreach ($leerlingen as $leerling) {
                        $name = htmlspecialchars($leerling['naam'] . ' ' . $leerling['achternaam']);
                        echo "<label>{$name}</label>";
                    }

                    echo '<br>';

                    // Display the winner's details if found
                    if ($winnerFound) {
                        $winningName = htmlspecialchars($winnerName . ' ' . $winnerSurname);
                        $winningDate = htmlspecialchars(date('d-m-Y H:i:s', strtotime($winnerDate))); // Formatting the date
                        echo "<p>Winnaar: {$winningName} <br>op {$winningDate}</p>";
                    } else {
                        // Only show the button if no winner has been found
                        echo "<form action='./adminHandlers/poulesAdminHandler.php' method='POST'>";
                        echo "<button type='submit' name='poule_id' value='{$pouleID}'>Genereer winnaar</button>";
                        echo "</form>";
                    }

                    echo "</div>";
                }
            } else {
                echo "ERROR: Could not execute query: " . mysqli_error($link);
            }
            ?>
        </div>
    </main>
    <?php include_once("header.php") ?>
</body>
</html>