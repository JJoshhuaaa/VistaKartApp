<script>
  // overlay
  // Open het overlay menu en verberg de hamburger-icon
  function openNav() {
    document.getElementById("myNav").style.height = "100%";
    document.getElementById("menu-icon").classList.add("hidden");
  }
  
  // Sluit het overlay menu en toon de hamburger-icon weer
  function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    document.getElementById("menu-icon").classList.remove("hidden");
  }
</script>

<header class="header">
  <a href="index.php">
    <div class="logo">
      <img src="img/vistalogo.png" alt="Karting Logo">
    </div>
  </a>
    <nav class="nav-menu">
      <a href="prijzen.php"><?php echo $languagePack['header']['prijzen'];?></a>
      <a href="info.php"><?php echo $languagePack['header']['info'];?></a>
      <a href="teams.php"><?php echo $languagePack['header']['teams'];?></a>
      <a href="contact.php"><?php echo $languagePack['header']['contact'];?></a>
      <a href="inschrijf.php"><?php echo $languagePack['header']['inschrijf'];?></a>
    </nav>

     <!-- Mobiele versie hamburgermenu -->
     <!-- bij verandering de onclick erbij voegen aub -->
  <div class="menu-icon" id="menu-icon" onclick="openNav()">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

</header>

<!-- Overlay menu -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="prijzen.php"><?php echo $languagePack['header']['prijzen'];?></a>
    <a href="info.php"><?php echo $languagePack['header']['info'];?></a>
    <a href="#"><?php echo $languagePack['header']['teams'];?></a>
    <a href="contact.php"><?php echo $languagePack['header']['contact'];?></a>
    <a href="inschrijf.php"><?php echo $languagePack['header']['inschrijf'];?></a>
  </div>
</div>

<script src="./handlers/languageCookieHandler.js"></script>
<br><a onclick='setLanguageCookie("en")' id='language' class='en'>EN</a>  |<a onclick='setLanguageCookie("nl")' id='language'>NL</a>



