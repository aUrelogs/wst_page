<?php 
 
    include'connection.php';

    $sql = "
    SELECT
    *
    FROM 
        `check_out_prod` as a
    LEFT JOIN 
        `cart` as c ON a.cid = c.id

    ";


  

    $result = $conn->query($sql);

  
    if($result->num_rows > 0){  


        $idx = 0;

        while($row = $result->fetch_assoc()){

            $id[$idx] = $row ["cid"];

            $cart_name[$idx] = $row["name"];
            $cart_price[$idx] = $row["price"];
            $cart_image[$idx] = $row["image"];
            $cart_quant[$idx] = $row["quantity"];




            $idx++;

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
    <title>WHAT'S THE SCOOP?  | To Pay</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">





</head>
<body>

    <?php include 'header.php';?>

    <?php

        for ($idx = 0; $idx < count($id); $idx++){


            echo $cart_name[$idx];







        }





    ?>

</body>
</html>