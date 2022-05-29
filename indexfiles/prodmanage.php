<?php 

    include ('connection.php');

    if(isset($_POST['submit'])){
        $productID = $_POST['productID'];
        $productNAME = $_POST['productName'];
        $productPRICE = $_POST['productPrice'];
        $productDESC = $_POST['productDesc'];
   
        $sql = "INSERT INTO `modify_products` (PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_DETAIL) 
        VALUES('$productID', '$productNAME', '$productPRICE', '$productDESC')";
        $result = mysqli_query($conn, $sql);

            if($result){
                header ('location:displayprod.php');
            } else {
                die(mysqli_error($conn));
            }
    }

 
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Product Manager</title>
  </head>
  <body>
    
    <div class="container my-5">
    <form method="post">

        <div class="form-group">
            <label>Enter Product ID</label>
            <input type="number" class="form-control" placeholder="Product ID" name="productID"autocomplete="off">
        </div>

        <div class="form-group">
            <label>Enter Product Name</label>
            <input type="text" class="form-control" placeholder="Product Name" name="productName">
        </div>

        <div class="form-group">
            <label>Enter Product Price</label>
            <input type="number" class="form-control" placeholder="Product Price" name="productPrice">
        </div>

        <div class="form-group">
            <label>Enter Product Description</label>
            <input type="text" class="form-control" placeholder="Product Description" name="productDesc">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
    </div>



  </body>
</html>