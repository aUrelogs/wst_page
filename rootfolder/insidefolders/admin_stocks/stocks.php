<?php

    include 'connection.php';

   //-------------------------------------------------------------------------//
    $sql = "
    SELECT
    *
    FROM 
        `modify_stocks` as s
    LEFT JOIN 
        `modify_products` as p ON s.id = p.id

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
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | <a href="http://localhost/wst_page/rootfolder/index.php">Admin Log Out</a></li>
            </ul>
        </nav>
    </header>

    <button><a href="http://localhost/wst_page/rootfolder/main-admin.php" class="text-light">
        BACK TO MAIN</a></button>
    <div class="name_of_page">
        <div id="title">Stocks Information</div>
    </div>



    <?php


            for($idx=0; $idx < count($stocksIDs); $idx++){

                            
                if(empty($prodName[$idx])){
                    die();

                }else{
                        echo"
                        
                            <main>

                                <section class='glass'>

                                    <div id='products'>

                                        $prodName[$idx] &nbsp; <br>
                                        $prodDet[$idx] &nbsp; <br>
                                        $stocksQTY[$idx] &nbsp; <br>
                                        <a href='edit_stock.php? id=$stocksIDs[$idx]'><button type= 'btn'>EDIT</button></a>
                                        &nbsp;
            
                                        <br>
   
   
   
                                   </section>
   
   
   
   
                               </main>
   
                               <br>
                                    
                                    
                                    
                                    
                                    
                                    
                                    </div>
                        
                        
                        
                        
                        ";


                }


            


            }

            ?>





   






    
    

</body>
</html>