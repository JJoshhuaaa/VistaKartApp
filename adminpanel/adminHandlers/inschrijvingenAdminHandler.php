<?php
include "../../database/config.php";

if (!$_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Invalid request method.";
    exit();
}

$removeId = isset($_POST['remove_id']) ? $_POST['remove_id'] : '';

$newFirstName = isset($_POST['new_first_name']) ? $_POST['new_first_name'] : '';
$newLastName = isset($_POST['new_last_name']) ? $_POST['new_last_name'] : '';
$newEmail = isset($_POST['new_email']) ? $_POST['new_email'] : '';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

// Remove user
if(!empty($removeId))
{
    $deleteQuery = 'DELETE FROM leerlingen WHERE id = ?';

    $stmt = mysqli_prepare($link, $deleteQuery);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("ERROR: Could not prepare query: " . mysqli_error($link));
    }

    // Bind the remove_id parameter
    mysqli_stmt_bind_param($stmt, 'i', $removeId); // 'i' means integer

    // Execute the delete statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Record deleted successfully.";
    } else {
        echo "ERROR: Could not execute query: " . mysqli_error($link);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../inschrijvingen.php");
    exit();
}

// Add user
if(!empty($newFirstName) || !empty($newLastName) || !empty($newEmail))
{
    $insertQuery = "INSERT INTO leerlingen (naam, achternaam, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($link, $insertQuery);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("ERROR: Could not prepare query: " . mysqli_error($link));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'sss', $newFirstName, $newLastName, $newEmail); // 'sss' means three strings

    // Execute the insert statement
    if (mysqli_stmt_execute($stmt)) {
        echo "New user added successfully.";
    } else {
        echo "ERROR: Could not execute query: " . mysqli_error($link);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($link);
    header("Location: ../inschrijvingen.php");
    exit();
}

// Edit user
if (empty($id) || empty($firstName) || empty($lastName) || empty($email)) {
    die("Please fill in all fields.");
}

// Prepare the update query
$updateQuery = "UPDATE leerlingen SET naam = ?, achternaam = ?, email = ? WHERE id = ?";
$stmt = mysqli_prepare($link, $updateQuery);

// Check if the statement was prepared successfully
if ($stmt === false) {
    die("ERROR: Could not prepare query: " . mysqli_error($link));
}

// Bind parameters
mysqli_stmt_bind_param($stmt, 'sssi', $firstName, $lastName, $email, $id); // 'sssi' means three strings and one integer

// Execute the update
if (mysqli_stmt_execute($stmt)) {
    header("Location: ../inschrijvingen.php");
} else {
    echo "ERROR: Could not execute query: " . mysqli_error($link);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($link);

header("Location: ../inschrijvingen.php");
exit();
?>