<?php

    include 'connection.php';

   
    $sql = "
    SELECT
    *
    FROM 
        `stocks` as s
    LEFT JOIN 
        `products` as p ON s.id = p.id

    ";

    $result = $conn->query($sql);

  
    if($result->num_rows > 0){  

        $idx = 0;

        while($row = $result->fetch_assoc()){

            $stockid[$idx] = $row["sid"];
            $prodQTY[$idx] = $row["PRODUCT_QTY"];
            $pname[$idx] = $row["name"];
            $desc[$idx] = $row["product_desc"];

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
  
    <title>WHAT'S THE SCOOP | STOCK STATUS</title>

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

    <div id="title">STOCKS INFORMATION</div>


    <main>
        <a href='http://localhost/wst_page/rootfolder/main-admin.php'><button class='button1'>BACK TO MAIN</button></a>
    </main>

    <br>

    
    <div class="glass2">

    <div id="products2">

        <div id="status">
            <b>CURRENT STOCKS STATUS</b>
            <br>
            <br>

        </div>
        

   


    <?php

        $total_stock = mysqli_query($conn, "SELECT * FROM `cart` as c LEFT JOIN `stocks` as s ON c.id = s.id;");
                                                                            
        if(mysqli_num_rows($total_stock) > 0){
            while($fetch_stocks = mysqli_fetch_assoc( $total_stock)){

    ?>

    <table style="border:30px">

        <tr>
            <td>

                <?php 

               
                    echo $fetch_stocks['name'] ;
                
                ?>

            </td>

            <td>

                <?php    echo  $stock_total = ($fetch_stocks['PRODUCT_QTY'] - $fetch_stocks['quantity']) . "<br>" ;  ?>
            
            </td>



        </tr>






    </table>

    <?php    }} ?>


    </div>


      
    </div>

    <?php


        
        for($idx=0; $idx < count($stockid); $idx++){

            if(empty($pname[$idx])){




            }else{

                echo "

                <main>

                <section class='glass'>

                    <div id='products'>

                        <h3> Product Name: &nbsp;  $pname[$idx]</h3> 
                        
                            <table>

                                <tr>

                                    <td>
                                        <a href='edit_stock.php? id=$stockid[$idx]'><button type= 'btn' class='button2'>EDIT</button></a> 
                                        <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_product/admin.php'><button type= 'btn' class='button3'>PRODUCTS</button></a>
                                        &nbsp;
                                    </td>
                                    <td>
                                        Product Details:&nbsp; $desc[$idx]
                                        <br>
                                        <br>

                                        
                                    <div id='stocks'>
    
                                       Starting Stock:   $prodQTY[$idx]  &nbsp;
                                        <br>
                                        <br>

                                    </div>
                                </td>
                 
                            </tr>

                        </table>

                </div>

            </section>

        </main>

        <br>";
            }

           
              
             

                                            }
                                     

                       
                    
 
   
    ?>



  

 







</body>
</html>