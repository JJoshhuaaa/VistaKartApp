<?php


if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

$id = isset($_POST['id']) ? $_POST['id'] : '';

if (empty($id)) {
    die("Oops! iets ging verkeerd.");
}

include "../../database/config.php";

$query = "SELECT * FROM berichten WHERE id = ?";
$stmt = mysqli_prepare($link, $query);
mysqli_stmt_bind_param($stmt, 'i', $id); // Assuming 'id' is an integer
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // If the row exists, update is_answered to 1
    $updateQuery = "UPDATE berichten SET is_answered = 1 WHERE id = ?";
    $updateStmt = mysqli_prepare($link, $updateQuery);
    mysqli_stmt_bind_param($updateStmt, 'i', $id);
    
    if (mysqli_stmt_execute($updateStmt)) {
        header("Location: ../index.php");
    } else {
        echo "ERROR: Could not execute query: $updateQuery. " . mysqli_error($link);
    }

    // Close the statement
    mysqli_stmt_close($updateStmt);
} else {
    echo "No record found with the given ID.";
}

// Close the result set and the connection
mysqli_free_result($result);
mysqli_stmt_close($stmt);
mysqli_close($link);

header("Location: ../index.php");

?>