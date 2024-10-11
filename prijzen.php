<?php
include 'config.php'; 

// Fetch prize data
$query = "SELECT * FROM prijzen";
$result = mysqli_query($link, $query);


if ($result === false) {
    die("ERROR: Could not execute query: $query. " . mysqli_error($link));
}

$prijzen = []; // Nodig voor de while loop

while ($prijs = mysqli_fetch_assoc($result)) {
    $prijzen[] = $prijs; 
}

mysqli_free_result($result);

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/prijzen.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Karting Prijzen</title>
</head>
<body>
    <!--preload de plek voor de header-->
    <div id="preloader"></div>
    <!--hij laat de header dynamisch in-->
    <div id="header-placeholder"></div>
    <!--import header-footer js-->
    <script src="./header-footer/header-footer.js"></script>
    <!--import header-footer css-->
    <link rel="stylesheet" href="header-footer/header-footer.css">

    <br><a href="?lang=en" id='language' class='en'>EN</a>  |<a href="?lang=nl" id='language'>NL</a>
    <section class="pricing-section">
        <h1>Karting Prijzen</h1>
        <div class="pricing-cards">
            <div class="card">
                <h2>2e plaats</h2>
                <img src="img/2nd.jpeg" alt="Zilveren medaille">
                <button data-modal="modal-2">Kijk naar de prijs</button>
            </div>
            <div class="card">
                <h2>1e plaats</h2>
                <img src="img/1st.png" alt="Champion Cup">
                <button data-modal="modal-1">Kijk naar de prijs</button>
            </div>
            <div class="card">
                <h2>3e plaats</h2>

                <img src="img/3d.jpg" alt="Bronzen medaille">
                <button data-modal="modal-3">Kijk naar de prijs</button>
            </div>
        </div>
    </section>
    

    <?php foreach ($prijzen as $index => $prijs): ?>
        <div id="modal-<?php echo $index + 1; ?>" class="modal">
            <div class="modal-content">
                <span class="close" data-modal="modal-<?php echo $index + 1; ?>">&times;</span>
                <img src="<?php echo htmlspecialchars($prijs['image_url']); ?>" alt="">
                <h2><?php echo htmlspecialchars($prijs['titel']); ?>:</h2>
                <p><?php echo htmlspecialchars($prijs['description']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>

    <?php include 'footer.php'; ?> 

</body>
<!--Nooit css of js in de html doen-->

</html>