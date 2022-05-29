<?php 

    include ('connection.php');
    $id =$_GET['updateid'];
    $sql = "SELECT * FROM `modify_products` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
        $productID = $row['PRODUCT_ID'];
        $productNAME = $row['PRODUCT_NAME'];
        $productPRICE = $row['PRODUCT_PRICE'];
        $productDESC = $row['PRODUCT_DETAIL'];

    if(isset($_POST['submit'])){
        $productID = $_POST['productID'];
        $productNAME = $_POST['productName'];
        $productPRICE = $_POST['productPrice'];
        $productDESC = $_POST['productDesc'];
   
        $sql = "UPDATE `modify_products` 
        SET id=$id, PRODUCT_ID=$productID, PRODUCT_NAME='$productNAME', PRODUCT_PRICE=$productPRICE, PRODUCT_DETAIL='$productDESC'
        WHERE id = $id";
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

    </form>
    </div>



  </body>
</html>