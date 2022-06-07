<?php 

    //classic for bread
    include ('connection.php');

    if(isset($_POST['submit'])){
        $productID = $_POST['productID'];
        $productNAME = $_POST['productName'];
        $productPRICE = $_POST['productPrice'];
        $productDESC = $_POST['productDesc'];
   
        $sql = "INSERT INTO `classic_bread` (id, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_DETAIL) 
        VALUES('$productID', '$productNAME', '$productPRICE', '$productDESC')";
        $result = mysqli_query($conn, $sql);

            if($result){
                header ('location:http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php');
            } else {
                die(mysqli_error($conn));
            }
    }
    if(isset($_POST['cancel'])){
        header ('location:http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php');
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
    <link rel="stylesheet" href="justanothercss.css">
    <title>Product Manager | Add Product</title>
  </head>
  <body>

  <div class ="">
<header>
<img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> Welcome User |<a href="http://localhost/wst_page/rootfolder/index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
</div>

    <div class="bgcol container my-5">
    <div class="container my-5">
    <form method="post">
    <font face="Century Gothic" size="50" color="#6b3e26">PRODUCT MANAGER</font>
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
        <button type="submit" class="btn btn-danger" name="cancel">Cancel </button>
        

    </form>
    </div>
    </div>
   

  </body>
</html>