<?php

    include 'connection.php';

   
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

        $prodID = [];
        $prodName = [];
        $prodDet = [];
        $proQTY = [];

        // //output data of each row
            
        while($row = $result->fetch_assoc()) {

                // print_r($row);

              
                

                // echo "id:" . $row[""] . "<br>";
                $prodID[] = $row["PRODUCT_ID"];
                $prodName[] = $row["PRODUCT_NAME"];
                $prodDet[] = $row["PRODUCT_DETAIL"];
                $proQTY[] = $row["PRODUCT_QTY"]; 

               
                }
                } else {
                        echo "0 results";
                    }


   


    // // selecting query
    // $sql = "SELECT * FROM `modify_stocks`";

    // $result = $conn->query($sql);

    // $stockID = [];
    // $stockQTY = [];
    
    // if($result->num_rows > 0){

    //     $idx = 0;
    //     while($row = $result->fetch_assoc()){
    //         $stockID[$idx] = $row["id"];
    //         $stockQTY[$idx] = $row["PRODUCT_QTY"];

    //         $idx++;
    //     }
    // } else {
    //         echo "0 results";
    //     }




    

    

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

    <form action="save_stocks.php" method="post">

        
    
        <?php

               
                for ($sidx = 0; $sidx <count($prodID); $sidx++){

                    echo "
                    
                    <main>

                    <section class='glass'>
            
                       
            
                        <div class='product_one'>
            
                            
                        <table>
                            
                            <tr>
                                <td>
                                    <h3>ADDED PRODUCT</h3>
                                </td>
                                <td>
                                    <h3>EDIT QUANTITY</h3>
                                </td>
            
                            </tr>
            
                            <tr>
            
                                <td>
                                        <u>PRODUCT NAME:</u>&nbsp;&nbsp; $prodName[$sidx] <br>
                                        <u>PRODUCT DETAIL:</u>&nbsp; $prodDet[$sidx] <br>
                                        <u>QUANTITY:</u>&nbsp;&nbsp $proQTY[$sidx] <br>
                                </td>
            
                                <td>
                                    
                                   
                                                    
                                   
                                   
            
                                   
            
            
            
                                </td>
            
            
            
            
                            
                            </tr>
            
                        </table>
            
                       
            
                           
                
                               
                            
                           
            
                        </div>
                        
            
                    </section>
            
                </main>

                <br>
            
            ";

                }
                    
                    
            


              




        ?>











    </form>

    
    

</body>
</html>