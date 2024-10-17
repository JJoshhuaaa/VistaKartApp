<?php
include "../../database/config.php";

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

if(isset($_POST['poule_id'])) {
    // Get the poule_id from the POST request
    $pouleID = $_POST['poule_id'];

    // Select a random leerling from the specified poule
    $query = "SELECT leerling_id FROM poule WHERE id = ?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("i", $pouleID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch all leerlingen in the specified poule
    $leerlingenArray = $result->fetch_all(MYSQLI_ASSOC);

    if (!empty($leerlingenArray)) {
        // Randomly select a winner from the array
        $randomIndex = rand(0, count($leerlingenArray) - 1);
        $winner = $leerlingenArray[$randomIndex];
        $winnerId = $winner['leerling_id'];
        // Insert the winner into the `poule_winnaar` table
        $insertStmt = $link->prepare("INSERT INTO poule_winnaar (poule_id, leerling_id) VALUES (?, ?)");
        $insertStmt->bind_param("ii", $pouleID, $winnerId);

        if ($insertStmt->execute()) {
            echo "Winner generated: {$winnerId} has been added to the poule_winnaar table.";
        } else {
            echo "Error: " . $insertStmt->error;
        }

        // Close the insert statement
        $insertStmt->close(); 
    } else {
        echo "No leerlingen available in this poule.";
    }

    // Close the connection and any other statements
    $stmt->close();
    $link->close();
}
else if(isset($_POST['generate_new_poules'])) {
    
    // Step 1: Get all leerlingen not in any poule
    $availableStudentsQuery = "SELECT id FROM leerlingen WHERE id NOT IN (SELECT leerling_id FROM poule)";
    $studentsResult = mysqli_query($link, $availableStudentsQuery);
    
    if ($studentsResult === false) {
        die("ERROR: Could not execute query: " . mysqli_error($link));
    }

    // Store available student IDs
    $students = [];
    while ($row = mysqli_fetch_assoc($studentsResult)) {
        $students[] = $row['id'];
    }

    shuffle($students);

    // Step 2: Check the highest poule ID
    $maxPouleQuery = "SELECT MAX(id) AS max_id FROM poule";
    $maxPouleResult = mysqli_query($link, $maxPouleQuery);
    
    if ($maxPouleResult === false) {
        die("ERROR: Could not execute query: " . mysqli_error($link));
    }

    $maxIDRow = mysqli_fetch_assoc($maxPouleResult);
    $newPouleID = isset($maxIDRow['max_id']) && $maxIDRow['max_id'] > 0 ? $maxIDRow['max_id'] + 1 : 1;

    // Step 3: Fill existing poules or create a new one
    $studentsPerPoule = 4; // Maximum number of students per poule

    // If no students are available to assign, exit
    if (count($students) === 0) {
        echo "No available students to assign.";

        header("Location: ../poules.php");
        exit();
    }

    // Fetch existing poule IDs and their current counts
    $pouleQuery = "SELECT id FROM poule";
    $pouleResult = mysqli_query($link, $pouleQuery);
    
    if ($pouleResult === false) {
        die("ERROR: Could not execute query: " . mysqli_error($link));
    }

    // Array to hold existing poule IDs
    $existingPoules = [];
    while ($row = mysqli_fetch_assoc($pouleResult)) {
        $existingPoules[] = $row['id'];
    }

    // Fill existing poules first
    foreach ($existingPoules as $pouleID) {
        // Check how many students are currently in the poule
        $currentCountQuery = "SELECT COUNT(*) AS count FROM poule WHERE id = $pouleID";
        $currentCountResult = mysqli_query($link, $currentCountQuery);
        $currentCountRow = mysqli_fetch_assoc($currentCountResult);
        
        if ($currentCountRow['count'] < $studentsPerPoule) {
            // Calculate how many spots are left in the poule
            $availableSpaces = $studentsPerPoule - $currentCountRow['count'];

            // Add students to the poule until it reaches the max
            for ($i = 0; $i < $availableSpaces && count($students) > 0; $i++) {
                $studentId = array_shift($students); // Get a student ID
                $insertStudentQuery = "INSERT INTO poule (id, leerling_id) VALUES (?, ?)";
                $insertStudentStmt = mysqli_prepare($link, $insertStudentQuery);
                mysqli_stmt_bind_param($insertStudentStmt, 'ii',$pouleID , $studentId);
                mysqli_stmt_execute($insertStudentStmt);
                mysqli_stmt_close($insertStudentStmt);
            }
        }
    }

    // After filling existing poules, create new poules if needed
    while (count($students) > 0) {

        // Fill up to 4 students in the new poule
        for ($i = 0; $i < $studentsPerPoule && count($students) > 0; $i++) {
            $studentId = array_shift($students); // Get the first student and remove from array
            $addStudentQuery = "INSERT INTO poule (id, leerling_id) VALUES (?, ?)";
            $addStudentStmt = mysqli_prepare($link, $addStudentQuery);
            mysqli_stmt_bind_param($addStudentStmt, 'ii',$newPouleID,  $studentId);
            mysqli_stmt_execute($addStudentStmt);
            mysqli_stmt_close($addStudentStmt);
        }

        $newPouleID++; // Increment the ID for the next poule
    }

    echo "Poules have been generated successfully.";
} else {
    echo "Invalid request.";
    mysqli_stmt_close($stmt);
    mysqli_close($link);

    header("Location: ../poules.php");
    exit();
}

header("Location: ../poules.php");
exit();

?>