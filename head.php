<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../Bootstrap 4.6/bootstrap-4.6.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="unterseiten.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../Bootstrap 4.6/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

<?php

function slider($bilder, $title) {
    ?>
    <section class="main-slider">

        <div class="decoration-border-left"></div>
        <div class="main-slider-text">
            <h1 class="sprachen"><?php echo $title?></h1>
        </div>
        <div class="slick-slider">
            <?php
                foreach ($bilder as $bild) {
                    echo '<div class="main-slider-img" style="background-image: url('.$bild.');"></div>';
                }
            ?>
        </div>
        <div class="decoration-border-right"></div>
        <a href="#text-melnychenko"><div class="arrow-down"></div></a>
    </section>
    <?php
}

function dummytext()
{
    echo '<section class="dummytext container">';
        echo'<div class="row">';
            echo'<div class="col-sm-12">';
                echo'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut delectus, accusantium dolor saepe pariatur neque temporibus adipisci aperiam tenetur optio consequatur eveniet omnis vero molestias, quod quo libero! Quod, esse?</p>';
            echo '</div>';
        echo '</div>';
    echo '</section>';
}