<!DOCTYPE html>
<html lang="de">
<head>
    <title>Referenzen</title>
    <?php include 'head.php'; ?>
</head>
<body>
    <section class="unterseite-slider-wrapper">
        <?php include 'header.php'; 
        
        $picArray = array();
        $picArray[0] = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1000&q=80';
        $picArray[1] = 'https://i2.wp.com/digital-photography-school.com/wp-content/uploads/2019/05/joseph-barrientos-49318-unsplash-e1558728034701.jpg?resize=1500%2C1000&ssl=1';
        slider($picArray, "Referenzen");
        ?>
    </section>
    <?php dummytext(); ?>

    <?php include 'footer.php'; ?>
</body>
</html>