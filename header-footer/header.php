<header class="header">
  <a href="index.php">
    <div class="logo">
      <img src="img/vistalogo.png" alt="Karting Logo">
    </div>
  </a>
    <nav class="nav-menu">
      <a href="prijzen.php"><?php echo $languagePack['header']['prijzen'];?></a>
      <a href="info.php"><?php echo $languagePack['header']['info'];?></a>
      <a href="#"><?php echo $languagePack['header']['teams'];?></a>
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



