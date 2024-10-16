<?php include 'lang.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="index.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="stylesheet" href="css/teams.css">
    <title>Teams</title>
</head>
<!-- TODO: error header fixen -->

<body>
    <?php include './header-footer/header.php' ?>
    <!--import header-footer css-->
    <link rel="stylesheet" href="header-footer/header-footer.css">

    <script src="./languageCookieHandler.js"></script>
    <br><a onclick='setLanguageCookie("en")' id='language' class='en'>EN</a> |<a onclick='setLanguageCookie("nl")' id='language'>NL</a>

    <div class="team-container">
        <section class="search-section">
            <input type="text" id="team-search" placeholder="Zoek team...">
        </section>

        <section class="teams-container">
            <!-- test data -->
            <div class="team-card">
                <h2>Team 1</h2>
                <p>Teamleden: Jan, Piet, Klaas, Marie</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
            <div class="team-card">
                <h2>Team 2</h2>
                <p>Teamleden: Anna, Bert, Lisa, Tom</p>
            </div>
        </section>
    </div>


    <?php include 'footer.php'; ?>
</body>

</html>