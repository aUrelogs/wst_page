<?php

    include 'connection.php';

    //selecting query
    $sql = "SELECT * FROM `modify_stocks`";

    $result = $conn->query($sql);

    

    

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

    <main>

        <section class="glass">

           

            <div class="product_one">

            <h3>ADDED PRODUCTS</h3>

                <?php 

                    $sql = "
                    SELECT 

                    *

                    FROM 
                        `modify_stocks` as s
                    LEFT JOIN 
                        `modify_products` as p ON s.PRODUCT_ID = p.PRODUCT_ID

                    ";

                        $result = $conn->query($sql);

                        

                        if ($result->num_rows > 0) {

                        // //output data of each row
                            
                        while($row = $result->fetch_assoc()) {

                                // print_r($row);

                                // echo "id:" . $row[""] . "<br>"; 
                                echo "<u>PRODUCT NAME:</u>&nbsp;&nbsp;" . $row["PRODUCT_NAME"] . "<br>";
                                echo "<u>PRODUCT DETAIL:</u>&nbsp;" . $row["PRODUCT_DETAIL"] . "<br>";
                                echo "<u>QUANTITY:</u>&nbsp;&nbsp" . $row["PRODUCT_QYT"] . "<br>";

                                }
                                } else {
                                        echo "0 results";
                                    }
                ?>

                    <br>
                    <br>
                
                <form action="" method="post">

                        <label for="ten_oz">10 oz:</label>
                        <input type="number" name = "ten_oz" value="" placeholder="No. Stock">



                </form>
            
                       





            </div>
            

        </section>

    </main>

</body>
</html>