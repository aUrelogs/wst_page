<?php 
    //classic for bread
    include ('connection.php');
    $id =$_GET['updateid'];
    $sql = "SELECT * FROM `classic_bread` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
        $productID = $row['id'];
        $productNAME = $row['PRODUCT_NAME'];
        $productPRICE = $row['PRODUCT_PRICE'];
        $productDESC = $row['PRODUCT_DETAIL'];

    if(isset($_POST['submit'])){
        $productID = $_POST['productID'];
        $productNAME = $_POST['productName'];
        $productPRICE = $_POST['productPrice'];
        $productDESC = $_POST['productDesc'];
   
        $sql = "UPDATE `classic_bread` 
        SET id=$id, id=$productID, PRODUCT_NAME='$productNAME', PRODUCT_PRICE=$productPRICE, PRODUCT_DETAIL='$productDESC'
        WHERE id = $id";
        $result = mysqli_query($conn, $sql);
            if($result){
                header ('location: http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php');
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
    <link rel="stylesheet" href="justanothercss.css">
    <title>Product Manager | UPDATE</title>
  </head>
  <body>

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

        <div class="form-group">
            <label>Enter Product ID</label>
            <input type="number" class="form-control" placeholder="Product ID" name="productID"autocomplete="off" value=<?php echo $productID; ?>>
        </div>

        <div class="form-group">
            <label>Enter Product Name</label>
            <input type="text" class="form-control" placeholder="Product Name" name="productName" value=<?php echo $productNAME; ?>>
        </div>

        <div class="form-group">
            <label>Enter Product Price</label>
            <input type="number" class="form-control" placeholder="Product Price" name="productPrice" value=<?php echo $productPRICE; ?>>
        </div>

        <div class="form-group">
            <label>Enter Product Description</label>
            <input type="text" class="form-control" placeholder="Product Description" name ="productDesc" value=<?php echo $productDESC; ?>>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">UPDATE</button>
        <button type="submit" class="btn btn-danger" name="submit">CANCEL</button>
       
       
    </form>
    </div>
  </div>



  </body>
</html>