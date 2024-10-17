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
    <link rel="stylesheet" href="./css/inschrijving_table.css">
</head>
<body>
    <div id="sidebar-container"></div>
    <main class="main-content">
        <h1>Inschrijvingen</h1>
        <hr>
        <table>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                $pageOffset = isset($_GET['page']) ? $_GET['page'] : 0;

                $pageOffset = $pageOffset > -1 ? $pageOffset : 0;

                $sql = "SELECT * FROM leerlingen  LIMIT 7 OFFSET " . $pageOffset * 7;
                    
                $result = mysqli_query($link, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><form action='./adminHandlers/inschrijvingenAdminHandler.php' method='POST'>";
                        echo "<td> <input type='text' value=". $row['naam'] . " name='first_name' required></td>";
                        echo "<td> <input type='text' value=" . $row['achternaam'] . " name='last_name' required></td>";
                        echo "<td> <input type='email' value=" . $row['email'] . " name='email' required></td>";
                        echo "<td> <button type='submit' name='id' value='" . $row['id'] . "'>Update persoon</button></td></form>";
                        echo "<td> <form action='./adminHandlers/inschrijvingenAdminHandler.php' method='POST'><button type='submit' name='remove_id' value='" . $row['id'] . "'>Verwijder persoon</button></form></td>";
                        echo "</tr>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo 'Query error: ' . mysqli_error($link);
                }
            ?>
        </table>
        <form action="inschrijvingen.php" method="GET">
                <button name="page" value=<?php echo $pageOffset - 1 ?>><-</button>
                <button name="page" value=<?php echo $pageOffset + 1 ?>>-></button>
        </form>
        <br>
        <hr>
        <h1>Voeg gebruiker toe</h1>
        
            <table>
                <tr>
                <form action="./adminHandlers/inschrijvingenAdminHandler.php" method='POST'>
                    <td><input type="text" name="new_first_name" placeholder="Voornaam" required></td>
                    <td><input type="text" name="new_last_name" placeholder="Achternaam" required></td>
                    <td><input type="email" name="new_email" placeholder="email@voorbeeld.nl" required></td>
                    <td><button type="submit">Voeg persoon toe</button></td>
                    </form>
                </tr>
            </table>
        


    </main>
    <?php include_once("header.php") ?>
</body>
</html>