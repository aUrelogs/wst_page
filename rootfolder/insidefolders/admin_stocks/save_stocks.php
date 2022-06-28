<?php

    include 'connection.php';

    $newStocks = "";
    $id = "";

    if(!isset($_POST["stock_id"])){
        header('Location:stocks.php');
        exit();
    }

    if(!isset($_POST["product_stocks"])){
        header('Location:stocks.php');
        exit();
    }

    $id = $_POST["stock_id"];
    $newStocks = $_POST["product_stocks"];

    $sql = "UPDATE `products` SET `PRODUCT_QTY` = '$newStocks' WHERE `id` = $id;";

        

    if ($conn->query($sql) === TRUE) {
        header ('Location:stocks.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }






?>