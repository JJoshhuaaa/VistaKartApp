<?php
// update.php

if (!$_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newInfo'])) {
    echo "No data to update.";
    exit();
}
// Load the existing data
$data = json_decode(file_get_contents('data.json'), true);

// Update the info value
$data['info'] = $_POST['newInfo'];

// Save the updated data back to the JSON file
file_put_contents('data.json', json_encode($data));

echo "Info updated successfully!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Info</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="newInfo">New Info:</label>
        <input type="text" name="newInfo" id="newInfo" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
