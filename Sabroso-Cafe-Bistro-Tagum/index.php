<?php
    $path = "./widgets/";
    $testimonial = $path."testimonial.php";
    $container =$path."cards.php";
    $contact = $path. "contact.php";
    $hero = $path."hero.php";
    $about = $path."about.php";
    $features = $path."reservation.php";
    $nav  = $path."nav.php";
    $fcons= $path."ficons.php";
    $adds = $path ."address.php";
    $fwrap = $path. "fwrapper.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabroso Cafe Bistro</title>

    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/d72c1a9589.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rancho&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <main>
            <div class="hero">
                <?php include($hero)?>
            </div>

            <div class="about">
                <?php include($about)?>
            </div>
            <!--Reservation-->
            <div class="features">
            <?php include($features)?>
            </div>

            <div class="menu">
                <div class="menu-head">
                    <h1 class="hsection"> Our Menu</h1>
                    <hr>
                    <h1 class="htitle">satisfy your hunger</h1>
                </div>
                <div class="menu-container">
                   <?php
                        include($container)
                   ?>
                </div>

            </div>
            <!--Testimonial-->
            <div class="testimonials">
                <?php
                   include($testimonial)
                ?>

            </div>
            <!--Contacts-->
            <div class="contact">
            <?php
                   include($contact)
                ?>
            </div>


        </main>
        <footer>
        <div class="footer-wrapper">
    <div class="footer-cards footer-about">
                <?php
                   include($fwrap)
                ?>
    </div>
    <div class="footer-cards footer-nav">
        <h1 class="hfooter">Quick links</h1>
        <hr class="hr-footer">
        <div class="footer-list-wrapper">
            <ul class="footer-list">
                <?php
                    include($nav)
                ?>
            <ul class="footer-list">
            <?php
                   include($fcons)
                ?>

            </ul>
        </div>
    </div>

    <div class="footer-cards footer-git">
            <?php
                   include($adds)
            ?>
    </div>
</div>
<div class="copyright">
    <hr class="w100">
    <div class="copyright-content">
        <small>Copyright © 2024 Sabroso Cafe Bistro. All Right Reserved</small>
    </div>
</div>
        </footer>
    </div>
</body>

</html>