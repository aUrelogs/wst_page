<?php

    include 'connection.php';

   //-------------------------------------------------------------------------//
    $sql = "
    SELECT
    *
    FROM 
        `modify_stocks` as s
    LEFT JOIN 
        `modify_products` as p ON s.PRODUCT_ID = p.PRODUCT_ID

    ";
    //------------------------------------------------------------------------//

    $result = $conn->query($sql);

    $stocksIDs = [];
    $stocksQTY = [];

    if($result->num_rows > 0){

        $idx = 0;

        while($row = $result->fetch_assoc()){

            $stocksIDs[$idx] = $row["id"];
            $stocksQTY[$idx] = $row["PRODUCT_QTY"];
            $prodIDs[$idx] = $row["PRODUCT_ID"];
            $prodName[$idx] = $row["PRODUCT_NAME"];
            $prodDet[$idx] = $row["PRODUCT_DETAIL"];

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
    <link rel="stylesheet" type="text/css" href="design_stocks.css">
    <title> Stocks Status</title>

</head>
<body>

    <header>
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 300px;">
        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | <a href="">Admin Log Out</a></li>
            </ul>
        </nav>
    </header>


    <div class="name_of_page">
        <div id="title">Stocks Information</div>
    </div>



    <?php

    for($idx=0; $idx < count($stocksIDs); $idx++){

    // echo"<input type='checkbox'  name=' stock_id[$idx] ' value = ' $stocksQTY[$idx]  ' >";
    echo  $stocksIDs[$idx] . "&nbsp;" . $stocksQTY[$idx] . "&nbsp;" . $prodName[$idx] . "\n";
    echo "<a href='edit_stock.php? id=$stocksIDs[$idx]'><button type = 'button'>EDIT</button></a>";
    echo "&nbsp;";

    echo "<br>";


    }

    ?>






    </form>

   






    
    

</body>
</html>