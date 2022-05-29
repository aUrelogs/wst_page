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
    <title>Product Manager | DISPLAY </title>
</head>
<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"><a href="prodmanage.php" class="text-light">
        ADD PRODUCT</a></button>
        <table class="table">
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
                                <td>'.$productPRICE.'</td>
                                <td>'.$productDESC.'</td>
                                <td>
                                <button class="btn btn-primary"><a href="update_prod.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
                                <button class="btn btn-danger"><a href="delete_prod.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
                                </td>
                                </tr>';
                            }
                        }
                ?>

              


            </tbody>
        </table>
    </div>
</body>
</html>