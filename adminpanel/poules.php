<!DOCTYPE html>
<html lang="nl">
<head>
    <?php
    include '../database/config.php'; 

    $query = "SELECT pi.poule_id, pi.poule_nummer, pi.leerling_id, l.naam 
          FROM pouling_indeling pi 
          JOIN leerlingen l ON pi.leerling_id = l.id";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die("ERROR: Could not execute $query. " . mysqli_error($link));
    }
    $poules = mysqli_fetch_all($result, MYSQLI_ASSOC);

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="../css/mainstyle.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div id="sidebar-container"></div>
    <main class="main-content">
        <h1>Poule</h1>

        <div id="entries" style="display: flex;flex-direction: column;">
        <table>
            <thead>
                <tr>
                    <th>Poule ID</th>
                    <th>Poule Nummer</th>
                    <th>Leerling ID</th>
                    <th>Naam</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($poules as $poule): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($poule['poule_id']); ?></td>
                        <td><?php echo htmlspecialchars($poule['poule_nummer']); ?></td>
                        <td><?php echo htmlspecialchars($poule['leerling_id']); ?></td>
                        <td><?php echo htmlspecialchars($poule['naam']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </main>

    <template id="entry-template">
        <!-- <h2>Naam</h2>
        <span d-link="naam" style="color: red;"></span>
        <h2>Achternaam</h2>
        <span d-link="achternaam" style="color: green;"></span>
        <h2>Email</h2>
        <span d-link="email" style="color: blue;"></span> -->

        <span d-variables="email,naam,achternaam,id">mijn email is %s en mijn naam is %s %s. Mijn ID is %</span>
    </template>

    <script src="header.js"></script>
</body>
</html>