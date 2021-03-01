 <!-- Mobile Nav -->
 <nav class="navbar hidden">
        <ul>
            <li><a class="menuLink" href="index.php">STARTSEITE</a></li>
            <li><a class="menuLink" href="leistungen.php">LEISTUNGEN</a></li>
            <li><a class="menuLink" href="kompetenz.php">KOMPETENZ</a></li>
            <li><a class="menuLink" href="referenzen.php">REFERENZEN</a></li>
            <li><a class="menuLink" href="kontakt.php">KONTAKT</a></li>
        </ul>
</nav>

<?php

    /* Seitenname */
    $pageName = $_SERVER['REQUEST_URI'];
    $searchIndex = strrpos($pageName, '/', 0)+1;
    $pageName = substr($pageName, $searchIndex);
?>

<!-- Header / Nav -->
<header class="header-wrapper">
    <button class="ham hidden"></button>
    <div class="header-left">
        <img src="Bilder/Melnychenko-Logo-ohne_Subline-Schwarz.png" alt="Melnychenko-Logo">
        <p>RUS-DEU-UKR</p>
    </div>

    <!-- Header Nav -->
    <nav class="header-right">
        <div class="header-right-text">
            <p>Allgemein beeidete und gerichtlich zertifizierte<br>Dolmetscherin für die russische Sprache</p>
            <img src="Bilder/OEVGD_Logo_1.png" alt="Ein OEVGD Logo"> 
        </div>   
        <ul class="header-right-menu">
            <li class="nav-item">
                <a href="index.php" <?php if($pageName == 'index.php' || empty($pageName)){echo 'class="nav-link1 nav-link"';}else{echo'class="nav-link"';} ?>>STARTSEITE</a>
            </li>
            <li class="nav-item">
                <a href="leistungen.php" <?php if($pageName == 'leistungen.php'){echo 'class="nav-link1 nav-link"';}else{echo'class="nav-link"';} ?>>LEISTUNGEN</a>
            </li>
            <li class="nav-item">
                <a href="kompetenz.php" <?php if($pageName == 'kompetenz.php'){echo 'class="nav-link1 nav-link"';}else{echo'class="nav-link"';} ?>>KOMPETENZ</a>
            </li>
            <li class="nav-item">
                <a href="referenzen.php" <?php if($pageName == 'referenzen.php'){echo 'class="nav-link1 nav-link"';}else{echo'class="nav-link"';} ?>>REFERENZEN</a>
            </li>
            <li class="nav-item">
                <a href="kontakt.php" <?php if($pageName == 'kontakt.php'){echo 'class="nav-link1 nav-link"';}else{echo'class="nav-link"';} ?>>KONTAKT</a>
            </li>
        </ul>
    </nav>
</header>
    
<?php 

?>