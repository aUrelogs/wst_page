<?php

    include 'connection.php';

    $id = "-1";

    if(!isset($_GET['id'])){
        header('Location: stocks.php');
        exit();
    }

    $id = $_GET['id'];
    $productQuant = "";

    

    $sql = "
    SELECT
    *
    FROM 
        `modify_stocks` as s

    LEFT JOIN 
        `modify_products` as p ON s.id = p.id

    ";

    $sql = "SELECT * FROM `modify_stocks` WHERE `id` = $id;";

   

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        while($row = $result->fetch_assoc()){

            $productQuant = $row["PRODUCT_QTY"];
        }
    }else{
        echo "0 result";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design_edit_stocks.css">
  
    <title> Edit Quantity</title>

    


</head>
<body>

    <header>
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> Welcome User | <a href="http://localhost/wst_page/rootfolder/index.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <br>
    <br>

    <main>

        
            <form action="save_stocks.php" method="post">

                <input type="hidden" name="stock_id" value="<?php echo $id; ?>" />

                <input type="number" id = "product_stocks" name= "product_stocks" value="<?php echo $productQuant ?> " min="0"/>

                <br>
                <br>

                <input type= "submit" value="Submit">

            </form>

    </main>

</body>
</html>
























