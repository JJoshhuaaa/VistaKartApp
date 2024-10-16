<?php
require 'database/config.php';
// Fetch all students from the leerlingen table
$query = "SELECT id FROM leerlingen";
$result = mysqli_query($link, $query);

// Check if there are students
if (mysqli_num_rows($result) > 0) {
    $leerlingen = [];

    // Store the IDs of students in an array
    while ($row = mysqli_fetch_assoc($result)) {
        $leerlingen[] = $row['id'];
    }

    shuffle($leerlingen);
    $poule_nummer = 1;
    $count = count($leerlingen);

    // Insert pupils into poules
    for ($i = 0; $i < $count; $i++) {
        // Insert the pupil into the pouling_indeling table
        $insert_query = "INSERT INTO pouling_indeling (poule_nummer, leerling_id) VALUES (?, ?)";
        $stmt = mysqli_prepare($link, $insert_query);

        // Check if the statement was prepared correctly
        if ($stmt) {
            // Bind parameters (integer for poule number and leerling ID)
            mysqli_stmt_bind_param($stmt, "ii", $poule_nummer, $leerlingen[$i]);
            mysqli_stmt_execute($stmt);

            // Check for errors after execution
            if (mysqli_stmt_errno($stmt)) {
                echo "ERROR: Could not execute query. " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "ERROR: Could not prepare query. " . mysqli_error($link);
        }

        // Check if we need to move to the next poule
        if (($i + 1) % 4 == 0) {
            $poule_nummer++; // Increment the poule number after every 4 players
        }
    }

    echo "Poule indeling created successfully.";
} else {
    echo "No students found to create poules.";
}

// Close connection
mysqli_close($link);
?>