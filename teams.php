<?php 
    include './handlers/languageHandler.php';
    include './database/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/mainstyle.css">
    <link rel="stylesheet" href="./css/teams.css">
    <title>Teams</title>
</head>
<!-- TODO: error header fixen -->

<body>
    <?php include './header-footer/header.php' ?>
    <!--import header-footer css-->
    <link rel="stylesheet" href="./header-footer/header.css">

    <div class="team-container">
            <label class="teams-plate"><?php echo $languagePackPage['teams_plate']; ?></label>

        <section class="teams-container">
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

                    // Generate team cards
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

                        // Start rendering the team card
                        echo "<div class='team-card'>";
                        echo "<h2>Team {$pouleID}</h2>";

                        // Loop through each leerling in the current poule
                        $members = [];
                        foreach ($leerlingen as $leerling) {
                            $members[] = htmlspecialchars($leerling['naam'] . ' ' . $leerling['achternaam']);
                        }

                        // Display team members
                        echo "<p>" . $languagePackPage['teammember_plate'] . ": " . implode(", ", $members) . "</p>";

                        // Display the winner's details if found
                        if ($winnerFound) {
                            $winningName = htmlspecialchars($winnerName . ' ' . $winnerSurname);
                            $winningDate = htmlspecialchars(date('d-m-Y H:i:s', strtotime($winnerDate))); // Formatting the date
                            echo "<br><p><b>" . $languagePackPage['winner_plate'] . ": {$winningName} <br>" . $languagePackPage['on_plate'] . " {$winningDate}</b></p>";
                        }

                        echo "</div>";
                    }
                } else {
                    echo "ERROR: Could not execute query: " . mysqli_error($link);
                }
                ?>
        </section>
    </div>


    <?php include 'header-footer/footer.php'; ?> 
</body>

</html>