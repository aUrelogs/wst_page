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
        `modify_products` as p ON s.PRODUCT_ID = p.PRODUCT_ID

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

<form action="save_stocks.php" method="post">

    <input type="hidden" name="stock_id" value="<?php echo $id; ?>" />

    <input type="number" id = "product_stocks" name= "product_stocks" value="<?php echo $productQuant ?>"/>

    <br>
            <br>

        <input type= "submit" value="Submit">






</form>