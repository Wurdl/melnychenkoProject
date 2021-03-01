<!DOCTYPE html>
<html lang="de">
<head>
    <title>Leistungen</title>
    <?php include 'head.php'; ?>
</head>

<body>
    <section class="unterseite-slider-wrapper">
        <?php include 'header.php'; 

        $picArray = array();
        $picArray[0] = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1000&q=80';
        $picArray[1] = 'https://i2.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1';
        slider($picArray, "Leistungen");
        ?>
    </section>
    <section class="container leistungen-cards-wrapper">
        <div class="row" id="dolmetschen">
            <div class="col-sm-6 leistungen-header-text">
                <h2>Dolmetschen</h2>
                <h3>Russisch, Deutsch, Ukrainisch</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore incidunt fuga voluptates quia deserunt nesciunt voluptatibus eius? Eum reprehenderit vel magnam provident animi enim ut?</p>
            </div>
            <div class="col-sm-6">
                <div class="dolmetschen-img-warpper unterseite-img-wrapper"></div>
            </div>
        </div>
        <div class="row" id="uebersetzen">
            <div class="col-sm-6">
                <div class="uebersetzen-img-wrapper unterseite-img-wrapper"></div> 
            </div>
            <div class="col-sm-6 uebersetzen-right leistungen-header-text">
                <h2>Übersetzen</h2>
                <h3>Russich, Deutsch, Ukrainisch</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium, reiciendis eum. Dolores, quos eligendi? Aspernatur.</p>
            </div>
        </div>
        <div class="row" id="lektorieren">
            <div class="col-sm-8 leistungen-header-text">
                <h2>Lektorieren</h2>
                <h3>Russich, Deutsch, Ukrainisch</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus vel, rerum cumque molestias quaerat fugit dignissimos ipsam libero debitis atque deserunt, soluta sint exercitationem officiis, quasi eveniet maiores saepe sunt. Voluptatem culpa fuga corporis aperiam!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos incidunt ratione ex impedit nulla beatae quaerat, officiis quam ab quisquam?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor autem suscipit excepturi nostrum aliquid expedita. Voluptatibus quidem ut assumenda voluptates.</p>
            </div>
            <div class="col-sm-4 lektorieren-images">
                <div class="lektorieren-img-wrapper">
                    <img src="Bilder/melnychenko-9827-bearbeitet.jpg" alt="melnychenko web">
                    <img src="Bilder/melnychenko-0510-web.jpg" alt="melnychanko web">
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>

