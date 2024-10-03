<?php
include 'connect.php';


//Step 2
// Fetch all participants in Poule A
$currentPouleId = 1;  // Assume we are working with the first poule (Poule A)
$participantsQuery = "SELECT id, name FROM participants WHERE poule_id = $currentPouleId";
$participantsResult = $mysqli->query($participantsQuery);

// Store participants in an array
$participants = [];
if ($participantsResult->num_rows > 0) {
    while ($row = $participantsResult->fetch_assoc()) {
        $participants[] = $row;
    }
}


// Step 3:
// Assign random positions to simulate race results
$positions = range(1, count($participants));  // Create an array of positions (1, 2, 3, ...)
shuffle($positions);  // Shuffle the positions array to randomize it

foreach ($participants as $index => $participant) {
    $position = $positions[$index];  // Get a random position for this participant
    $participantId = $participant['id'];

    $mysqli->query("INSERT INTO race_results (participant_id, poule_id, position) VALUES ($participantId, $currentPouleId, $position)");
}


// Step 4: 
//Identify winners (position 1 in each poule)
$winnersQuery = "
    SELECT participant_id, participant.name
    FROM participants
    INNER JOIN race_results ON participant_id = race_results.participant_id
    WHERE race_results.position = 1 AND race_results.poule_id = $currentPouleId";

$winnersResult = $mysqli->query($winnersQuery);

$winners = [];
if ($winnersResult->num_rows > 0) {
    while ($row = $winnersResult->fetch_assoc()) {
        $winners[] = $row['participant_id'];
    }
}

// Step 5: Create new poules for the next round
$pouleSize = 4;  // Number of participants per poule
$numberOfNewPoules = ceil(count($winners) / $pouleSize);  // Calculate number of new poules needed
$nextRound = 2;  // Assume next round number is 2

for ($i = 0; $i < $numberOfNewPoules; $i++) {
    // Create a new poule for the next round
    $mysqli->query("INSERT INTO poules (poule_name, round) VALUES ('Poule " . ($i + 1) . "', $nextRound)");
    $newPouleId = $mysqli->insert_id;  // Get the new poule ID

    // Assign participants (winners) to this new poule
    for ($j = 0; $j < $pouleSize; $j++) {
        if (!empty($winners)) {
            $winnerId = array_shift($winners);  // Get the first winner
            $mysqli->query("UPDATE participants SET poule_id = $newPouleId WHERE id = $winnerId");
        }
    }
}

// Close the connection
$mysqli->close();



?>
