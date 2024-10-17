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
    <link rel="stylesheet" href="./css/contact_table.css">
</head>
<body>
    <div id="sidebar-container"></div>
    <main class="main-content">
        <h1>Welkom bij het Admin Panel</h1>

        <h2>Contact berichten: </h2>
        <hr>
        <form action="./adminHandlers/contactAdminHandler.php" method="POST">
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Bericht</th>
                    <th></th>
                </tr>
            <?php 
                $sql = "SELECT * FROM berichten WHERE NOT is_answered = 1 ORDER BY created_at DESC LIMIT 10";
                    
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td> <button type='submit' name='id' value='" . $row['id'] . "'>Zet naar Beantwoord</button></td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo 'Query error: ' . mysqli_error($link);
                }
            ?>

                
            </table>
        </form>
    </main>

    <?php include_once("./header.php") ?>
</body>
</html>