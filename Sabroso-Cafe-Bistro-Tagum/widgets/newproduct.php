<?php 
    include_once("../models/newfood.php");
    if(isset($_POST["submit"])){
        $newProduct = new Products($_POST["fname"],$_POST["prize"],$_POST["size"],$_POST["type"]);
        $newProduct->save();
        {
        echo"<script>document.location='menu.php';</script>";
      }
    }
  
    
    ?>
    <style>
      .white-input {
        background-color: white;
        color: black; /* Change the text color if needed */
      }
      </style>

<div class="container-fluid p-5 bg-dark mt-3">
  <div class="row d-flex justify-content-center">
    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
      <h1 style="color: white;">Add Product</h1>
      <br>
      <form class="form-card" action="menu.php" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-between text-left">
          <div class="col-6">
            <input type="text" class="form-group col-12 flex-row d-flex white-input" placeholder="Enter ProductName..." name="fname">
          </div>
          <div class="col-6">
            <input type="number" class="form-group col-12 flex-row d-flex white-input" placeholder="Enter Price" name="prize">
          </div>
          <div class="col-6">
            <select name="size" class="form-group col-12 flex-row d-flex white-input p-3">
              <option value="" disabled selected>Select Description</option>
              <option value="Single Only">Single Only</option>
              <option value="Good for 3 or 4 pax">Good for 3 or 4 pax</option>
              <option value="Good for 2-3 pax">Good for 2-3 pax</option>
              <option value="Serve with Rice">Serve with Rice</option>
            </select>
          </div>
          <div class="col-6">
            <select name="type" class="form-group col-12 flex-row d-flex white-input p-3">
              <option value="" disabled selected>Select Category</option>
              <option value="Popular">Popular</option>
              <option value="Rice-meal">Rice Meal</option>
              <option value="Salad">Salad</option>
            </select>
          </div>
          <div class="col-12">
            <input type="file" class="form-group col-12 flex-row d-flex white-input" name="image">
          </div>
        </div>
        <div class="row col-6 justify-content-left">
          <input type="submit" value="Create new product" name="submit" class="btn-block btn-primary form-group col-sm-6">
        </div>
      </form>
    </div>
  </div>
</div>
<div class="menu-cat-head">`
    <h1 class="hsection" id="rice-meals">Products</h1>
    <hr class="hr-menu">
</div>