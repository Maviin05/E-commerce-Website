<?php
    $root =  dirname(__FILE__,2);
    $path = $root."/widgets/";
    $fcons= $path."ficons.php";
    $nav2 = $path."nav2.php";
    $adds = $path ."address.php";
    $fwrap = $path. "fwrapper.php";
    $intro = $path . "intromenu.php";
    $headnav = $path. "headernav.php";
    $about = $path."aboutus.php";
    $hero = $path."herous.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabroso Cafe Bistro</title>

    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/d72c1a9589.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rancho&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../styles2.css">
</head>
<body>
    <div class="wrapper">
    <header>
         <?php
            include($headnav)
            ?>
        </header>
        <main>
            <div class="hero">
                <?php include($hero)?>
            </div>

            <div class="about">
                <?php include($about)?>
            </div>
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
                    include($nav2)
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