<?php
include 'config.php';

$query = $conn->query("SELECT id FROM leerlingen");
$leerlingen = $query->fetchAll(PDO::FETCH_COLUMN); // Haal alleen de IDs op

// Shuffle de leerlingen om een willekeurige indeling te krijgen
shuffle($leerlingen);

// Maak de poules
$pouleGrootte = 4;
$pouleNummer = 1;

foreach (array_chunk($leerlingen, $pouleGrootte) as $poule) {
    foreach ($poule as $leerling_id) {
        
        $insertQuery = $conn->prepare("INSERT INTO pouling_indeling (leerling_id) VALUES (:leerling_id)");
        $insertQuery->execute([':leerling_id' => $leerling_id]);
    }
    $pouleNummer++;
}

// Optioneel: Geef een bericht weer dat de indeling is opgeslagen
echo "Poule indeling is succesvol opgeslagen in de database.";
?>