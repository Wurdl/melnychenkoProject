<!DOCTYPE html>
<html lang="de">
<head>
    <title>Melnychenko Startseite</title>
    <?php
        include("head.php");
    ?>
</head>
<body id="startseite">
        <?php
            include("header.php");
        ?>

    <!-- Main Slider -->
    <section class="main-slider">
        <div class="decoration-border-left"></div>
        <div class="main-slider-text">
            <h1 class="sprachen">Russisch</h1><br>
            <h1 class="sprachen">Deutsch</h1><br>
            <h1 class="sprachen">Ukrainisch</h1><br>
            <p><a href="leistungen.php" >Leistungen</a></p>
        </div>
            <div class="slick-slider">
                <div class="main-slider-img" style="background-image: url(Bilder/melnychenko-0447-bearbeitet.jpg);"></div>
                <div class="main-slider-img" style="background-image: url(Bilder/melnychenko-0137-web.jpg);"></div>
                <div class="main-slider-img" style="background-image: url(Bilder/melnychenko-0013-bearbeitet.jpg);"></div>
            </div>
        <div class="decoration-border-right"></div>
        <a href="#text-melnychenko"><div class="arrow-down"></div></a>
    </section>

    <!-- Text unter dem Slider -->
    <section id="text-melnychenko">
        <h2 style="font-weight: bold;">Nataliya Melnychenko, MA:</h2>
        <h3>Professionelle Sprachdienstleistung<br>Russisch - Deutsch - Ukrainisch</h3>
    </section>

    <!-- Leistungen - Cards -->
    <section class="container"  id="leistungen">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="leistungen-border">
                    <h2 class="leistungen-bold-h1">Dolmetschen:</h2>
                    <p>Ich biete sowohl Konsekutivdolmetschen (Dolmetschung im Nachhinein) als auch Simultandolmetschen (die Aufnahme des Ausgangtexts simultan mit der Wiedergabe in die Zielsprache).</p>
                    <a href="leistungen.php"><p class="leistungen-background">DOLMETSCHER</p></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="leistungen-border">
                    <h2 class="leistungen-bold-h1">Übersetzen:</h2>
                    <p>Ich biete sowohl Konsekutivdolmetschen (Dolmetschung im Nachhinein) als auch Simultandolmetschen (die Aufnahme des Ausgangtexts simultan mit der Wiedergabe in die Zielsprache).</p>
                    <a href="#"><p class="leistungen-background">ÜBERSETZER</p></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="leistungen-border">
                    <h2 class="leistungen-bold-h1">Lektorieren:</h2>
                    <p>Ich biete sowohl Konsekutivdolmetschen (Dolmetschung im Nachhinein) als auch Simultandolmetschen (die Aufnahme des Ausgangtexts simultan mit der Wiedergabe in die Zielsprache).</p>
                    <a href="#"><p class="leistungen-background">LEKTORAT</p></a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="leistungen-border">
                    <h2 class="leistungen-bold-h1">Transkripieren:</h2>
                    <p>Ich biete sowohl Konsekutivdolmetschen (Dolmetschung im Nachhinein) als auch Simultandolmetschen (die Aufnahme des Ausgangtexts simultan mit der Wiedergabe in die Zielsprache).</p>
                    <a href="#"><p class="leistungen-background">TRANSKRIPTION</p></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Kundenreferenzen -->
    <section class="kundenreferenzen-wrapper" id="kundenreferenz">
        <div class="kundenreferenzen-title">
            <h2>Kundenreferenzen:</h2>
        </div>

        <div class="referenzen-slider-slick">
            <img src="Bilder/OperGraz-LOGO.jpg" alt="Logo Oper Graz">
            <img src="Bilder/Referenz_1_kultum.jpg" alt="Logo Kultum">
            <img src="Bilder/Referenz_2_ETC.jpg" alt="Logo ETC">
            <img src="Bilder/Referenz_3_WUA.jpg" alt="Logo WUA">
            <img src="Bilder/Referenz_2_ETC.jpg" alt="Logo ETC">
            <img src="Bilder/Referenz_3_WUA.jpg" alt="Logo WUA">
        </div>
    </section>
    <section id="border">
        <div class="bottom-border">
            <div class="bottom-border-line"></div>
            <a href="#info"><div class="bottom-border-arrow-down"></div></a>
            <div class="bottom-border-line"></div>
        </div>
    </section>

    <!-- Melnychenko Info -->
    <section class="container autoscale melnychenko-info" id="info">
        <div class="row">
            <div class="col-lg-4 info-img">
                <img src="Bilder/melnychenko-9987-web.jpg" alt="Ein Bild von Frau Melnychenko">
            </div>
            <div class="col-lg-8 mobile-info-txt">
                <h2 class="melnychenko-info-h2">Nataliya Melnychenko, MA</h2>
                <h3 class="melnychenko-info-h4">Allgemein beeidete und gerichtlich zertifizierte Dolmetscherin für die<br>russische Sprache</h3>
                <p>Mitglied bei UNIVERSITAS Austria, Berufsverband für Dolmetschen und Übersetzen<br><br>
                    Mitglied des Österreichischen Verbands der allgemein beeideten und gerichtlich zertifizierten Dolmetscher (ÖVGD)</p>
                <a href="#"><p class="melnychenko-info-kompetenzen">MEINE KOMPETENZEN</p></a>
            </div> 
        </div>
    </section>

    <!-- Footes imgages -->
    <section class="footer-images">
        <div class="row row-cols-2 row-cols-md-4">
            <div class="col">
                <img class="img-fluid" src="Bilder/melnychenko-0013-web.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="Bilder/melnychenko-0298-web.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="Bilder/melnychenko-0137-web.jpg" alt="">
            </div>
            <div class="col">
                <img class="img-fluid" src="Bilder/melnychenko-9824-web.jpg" alt="">
            </div>
        </div>
    </section>

    <?php
    include("footer.php");
    ?>

</body>
</html>