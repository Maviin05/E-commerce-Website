<?php
    $root =  dirname(__FILE__,2);
    $path = $root."/widgets/";
    $fcons= $path."ficons.php";
    $nav2 = $path."nav2.php";
    $adds = $path ."address.php";
    $fwrap = $path. "fwrapper.php";
    $intro = $path . "intromenu.php";
    $headnav = $path. "headernav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>

    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/d72c1a9589.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rancho&display=swap"
        rel="stylesheet">
     
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap CSS-->	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- Bootstrap CSS nav-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!--External JS-->
<script src="../script.js" async></script>

</head>
<link rel="stylesheet" type="text/css" href="../styles2.css">
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <?php include_once("../models/newfood.php") ?>
    <div class="wrapper">
        <header>
         <?php
            include($headnav)
            ?>
        </header>
            <main>
                <div class="menu-hero">
                <div class="hero-desc">
                <h1 class="hero-title1">menu</h1>
                <h1>Where delicious meets <span class="delight">delightful</span></h1>
                <p>Craving a taste of delight? Sabroso can deliver it for you! <br> Explore our menu and discover
                deliciousness.</p>

                </div>
            </div>

           
<?php
include("../widgets/newproduct.php");
?>
<section id="product-cards">
  <div class="container-fluid">
    <div class="menurows">
    <?php
        $result  = Products::getAll();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
    ?>
      <div class="menu-colm filter-item all new">
        <div class="menu-cards">
          <img src="<?= '../images/menu/productImages/'.$row["img"] ?>" class="card-img-top shop-item-image" alt="<?=$row['fname']?>">
          <div class="card-body">
            <div class="menu2-desc">
              <h5 class="card-title shop-item-title"><?=$row['fname']?></h5>
              <p class="card-text shop-item-size"><?=$row["size"];?></p>
              <p class="card-text shop-item-type"><?=$row["type"];?></p>
              <p class="card-text shop-item-price">Php  <?=$row["prize"];?></p>
            </div>
            <button type="button" style="width: 100%;" class="btn btn-primary mt-auto shop-item-button"><i class="fa-solid fa-cart-shopping " style="margin-right: 4%; margin-bottom: 2px;"></i>Add To Cart</button>
            <div class="mt-2">
            <a href="../update.php?id=<?=$row["id"];?>"><button  style="width: 100%;" class="btn btn-secondary mt-10px shop-item-button">Update</button></a>
            </div>
          </div>
        </div>  
      </div>
      <?php
            }
        } else {
            echo "No new products found.";
        }
    ?>
    </div>
  </div>  
</section>


<!--Shopping Cart-->
<section class="container content-section" id="shopping-cart">
  
  <h3 style="text-decoration: underline;text-align: center; margin-bottom: 7%;">Shopping Cart</h3>
 
 <table class="table table-hover table-cart">
  <thead>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody class="cart-items">
    
     
  </tbody>
</table>

    <div class="cart-total"> 
      <strong class="cart-total-title">Total</strong>
      <span  class="cart-total-price" style="text-align: right;">$0</span>
    </div>
 

    <div class="btn-purchase" style="margin-top: 10%;">
      <button type="button"  class="btn btn-dark btn-purchase "><i class="fa-solid fa-cart-shopping " style="margin-right: 6%;"></i>PURCHASE</button>
    </div>

</section>



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
                            include($nav2)
                            ?>
                        </ul>
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

    <script src="../script.js"></script>
</body>

</html>