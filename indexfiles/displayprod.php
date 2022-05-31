<?php 
    include ('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="justanothercss.css">
    <title>Product Manager | DISPLAY </title>
</head>
<body>

<div class ="">
<header>
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> Welcome User | <a href = index.php>Log out</a></li>
            </ul>
        </nav>
    </header>
</div>
   
    <div class = "bgcol container my-5">
    <div class="container">
        <button class="btn btn-primary my-4"><a href="prodmanage.php" class="text-light">
        ADD PRODUCT</a></button> <button class="btn btn-danger my-4"><a href="main-admin.php" class="text-light">
        BACK TO MAIN</a></button>
        <table class="table table-dark"">
            <thead>
                <tr align="center">
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Description</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $sql = "SELECT * FROM `modify_products`";
                    $result = mysqli_query($conn, $sql);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $productID = $row['PRODUCT_ID'];
                                $productNAME = $row['PRODUCT_NAME'];
                                $productPRICE = $row['PRODUCT_PRICE'];
                                $productDESC = $row['PRODUCT_DETAIL'];
                                echo '<tr align="center">
                                <th scope="row">'.$productID.'</th>
                                <td>'.$productNAME.'</td>
                                <td>'."₱ ".$productPRICE.'</td>
                                <td>'.$productDESC.'</td>
                                <td>
                                <button class="btn btn-primary"><a href="update_prod.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
                                <button class="btn btn-danger"><a href="delete_prod.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
                                <button class="btn btn-success"><a href="Stocks/stocks.php?stocksid='.$productID.'" class="text-light">STOCKS</a></button>
                                </td>
                                </tr>';
                            }
                        }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    
</body>
</html>