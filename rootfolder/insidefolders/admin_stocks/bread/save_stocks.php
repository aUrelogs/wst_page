<?php

    include 'connection.php';

    $newStocks = "";
    $id = "";

    if(!isset($_POST["stock_id"])){
        header('Location: http://localhost/wst_page/rootfolder/insidefolders/admin_stocks/stocks.php');
        exit();
    }

    if(!isset($_POST["product_stocks"])){
        header('Location: http://localhost/wst_page/rootfolder/insidefolders/admin_stocks/stocks.php');
        exit();
    }

    $id = $_POST["stock_id"];
    $newStocks = $_POST["product_stocks"];

    $sql = "UPDATE `classic_stocks_bread` SET `PRODUCT_QTY` = '$newStocks' WHERE `id` = $id;";

        

    if ($conn->query($sql) === TRUE) {
        header ('Location: http://localhost/wst_page/rootfolder/insidefolders/admin_stocks/stocks.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }






?>