<?php

    include 'connection.php';

   //-------------------------------------------------------------------------//
    $sql = "
    SELECT
    *
    FROM 
        `classic_stocks` as s
    LEFT JOIN 
        `classic_table` as p ON s.id = p.id

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
<body style="margin: 0px">

    <header>
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">

        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | <a href="http://localhost/wst_page/rootfolder/index.php">Admin Log Out</a></li>
            </ul>
        </nav>

    </header>

    <div class="name_of_page">
        <div id="title">STOCKS INFORMATION</div>
    </div>

    <main>
        <a href='http://localhost/wst_page/rootfolder/main-admin.php'><button class='button1'>BACK TO MAIN</button></a>
    </main>

    <br>

    <?php

        for($idx=0; $idx < count($stocksIDs); $idx++){
                            
            if(empty($prodName[$idx])){

                die();

            }else{
                    echo"
                        
                        <main>

                            <section class='glass'>

                                <div id='products'>

                                    <h3>Product Name: $prodName[$idx] &nbsp;</h3> 
                                    
                                        <table>

                                            <tr>

                                                <td>
                                                    <a href='edit_stock.php? id=$stocksIDs[$idx]'><button type= 'btn' class='button2'>EDIT</button></a> 
                                                    <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php'><button type= 'btn' class='button3'>PRODUCTS</button></a>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    Product Details: $prodDet[$idx] &nbsp; 
                                                    <br>
                                                    <br>
                                                    
                                                    <div id='stocks'>
                                                    
                                                        Available Stock: $stocksQTY[$idx] &nbsp; 
                                                        <br>
                                                        <br>

                                                    </div>
                                                </td>
                                 
                                            </tr>

                                        </table>

                                </div>
   
                            </section>
   
                        </main>
   
                        <br>
                    ";

                }

        }

    ?>

    <!--BREAD-->

    <?php

    //-------------------------------------------------------------------------//

    $sql = "
    SELECT
    *
    FROM 
        `classic_stocks_bread` as b
    LEFT JOIN 
        `classic_bread` as c ON b.id = c.id

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


        for($idx=0; $idx < count($stocksIDs); $idx++){
                            
            if(empty($prodName[$idx])){

                die();

            }else{
                    echo"
                        
                        <main>

                            <section class='glass'>

                                <div id='products'>

                                    <h3>Product Name: $prodName[$idx] &nbsp;</h3> 
                                    
                                        <table>

                                            <tr>

                                                <td>
                                                    <a href='bread/edit_stock.php? id=$stocksIDs[$idx]'><button type= 'btn' class='button2'>EDIT</button></a> 
                                                    <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php'><button type= 'btn' class='button3'>PRODUCTS</button></a>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    Product Details: $prodDet[$idx] &nbsp; 
                                                    <br>
                                                    <br>
                                                    
                                                    <div id='stocks'>
                                                    
                                                        Available Stock: $stocksQTY[$idx] &nbsp; 
                                                        <br>
                                                        <br>

                                                    </div>
                                                </td>
                                
                                            </tr>

                                        </table>

                                </div>

                            </section>

                        </main>

                        <br>
                    ";

                }

        }

    ?>


</body>
</html>