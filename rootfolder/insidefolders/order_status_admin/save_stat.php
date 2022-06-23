<?php

   include 'connection.php';

    $newStat = "";
    $id = "";

    if(!isset($_POST["ch_id"])){
        header('Location:admin_stat_main.php');
        exit();
    }

    if(!isset($_POST["status_up"])){
        header('Location:admin_stat_main.php');
        exit();
    }

    $id = $_POST["ch_id"];
    $newStat= $_POST["status_up"];

    $sql = "UPDATE `order` SET `status` = '$newStat' WHERE `id` = $id;";

        

    if ($conn->query($sql) === TRUE) {
        header ('Location: admin_stat_main.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }






?>