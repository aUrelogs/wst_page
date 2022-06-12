<?php

    include 'connection.php';


    // $sql ="INSERT INTO `products` (`id`) VALUES ('id')";
    

   

    //         $result = $conn->query($sql);


    // $sql = "INSERT INTO `stocks`( `id`) VALUES ('id')";


   
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
        
        for($idx=0; $idx < count($stockid); $idx++){
                            
            if(empty($pname[$idx])){

                // die();

            }else{
                    echo"
                        
                        <main>

                            <section class='glass'>

                                <div id='products'>

                                    <h3>Product Name: $pname[$idx] &nbsp;</h3> 
                                    
                                        <table>

                                            <tr>

                                                <td>
                                                    <a href='edit_stock.php? id=$stockid[$idx]'><button type= 'btn' class='button2'>EDIT</button></a> 
                                                    <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_product/admin.php'><button type= 'btn' class='button3'>PRODUCTS</button></a>
                                                    &nbsp;
                                                </td>
                                                <td>
                                                    Product Details: $desc[$idx] &nbsp; 
                                                    <br>
                                                    <br>
                                                    
                                                    <div id='stocks'>
                                                    
                                                        Available Stock: $prodQTY[$idx] &nbsp; 
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