<?php 

if (isset ($_GET["id"]) && $_GET["id"]){
    include_once("models/newfood.php");
    $empID = $_GET["id"];
    //search db for product
    $emp = Products::search($empID);
     if($_SERVER["REQUEST_METHOD"] === "POST"){
        //update db
        $emp->fname = $_POST["fname"];
        $emp->prize = $_POST["prize"];
        $emp->size = $_POST["size"];
        $emp->type = $_POST["type"];
        $emp->img = $_POST["img"];
        $emp->update();
     }
}else {
    header("location:pages/menu.php");
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5 p-5 bg-light">

        <form action="update.php?id=<?= $empID ?>" method = "POST" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="fname" class="form-label">Product Name:</label>
            <input value="<?= $emp->fname ?>" type="text" class="form-control"  placeholder="Enter firstname" name="fname">
        </div>
        <div class="mb-3">
            <label for="prize" class="form-label">Price:</label>
            <input value="<?= $emp->prize ?>" type="number" class="form-control"  placeholder="Enter lastname" name="prize">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">Description:</label>
            <select name="size" class="form-control">
              <option value="" disabled selected>Select Description</option>
              <option value="Single Only">Single Only</option>
              <option value="Good for 3 or 4 pax">Good for 3 or 4 pax</option>
              <option value="Good for 2-3 pax">Good for 2-3 pax</option>
              <option value="Serve with Rice">Serve with Rice</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Category:</label>
            <select name="type" class="form-control" value="<?= $emp->type ?>">
              <option value="" disabled selected>Select Category</option>
              <option value="Popular">Popular</option>
              <option value="Rice Meal">Rice Meal</option>
              <option value="Salad">Salad</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Menu</button>
        </form>
    </div>

</body>
</html>