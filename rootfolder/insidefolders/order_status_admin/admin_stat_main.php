<?php

    include 'connection.php';


    $sql = "
    SELECT
    *
    FROM 
        `check_out_prod` as c
    LEFT JOIN 
        `order` as o ON c.id = o.id

    ";


    $result = $conn->query($sql);

    if($result->num_rows > 0){


        $idx = 0;

        while($row = $result->fetch_assoc()){

            $status_id[$idx] = $row["cid"];
            $orderID[$idx] = $row["id"];
            
            $customer[$idx] = $row["name"];
            $phone[$idx] = $row["number"];
            $total_prod[$idx] = $row["total_products"];
            $total_price[$idx] = $row["total_price"];
            $status[$idx]= $row["status"];

            $idx++;



        }


    }

    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT'S THE SCOOP | ADMIN ORDER STATUS</title>
    <link rel="stylesheet" type="text/css" href="design_stats.css">

</head>
<body style="margin: 0px">

    <header>
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">

        <nav>
            <ul class ="nav_links">
                <li> <a href="http://localhost/wst_page/rootfolder/index.php"> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | Admin Log Out</a></li>
            </ul>
        </nav>

    </header>

    
    
    <div id="title">UPDATE ORDER STATUS</div>
   

    <main>
        <a href='http://localhost/wst_page/rootfolder/main-admin.php'><button class='button1'>BACK TO MAIN</button></a>

    </main>

    <main>


    <h3 style="color: black;"> Meaning of Numbers:  </h3>

    </main>

        <p style="color: red; text-shadow: 0 0 1px black;"><b>0 - Pending</b></p>
        <p style="color:yellow; text-shadow: 0 0 2px black;"><b>1 - To Pay</b></p>
        <p style="color: blue; text-shadow: 0 0 1px black;"><b>2 - To Ship</b></p>
        <p style="color: green; text-shadow: 0 0 1px black;"><b>3 - To Receive</b></p>


        <br>

    
    
    <?php


            for($idx=0; $idx < count($status_id); $idx++){

                if(empty($orderID[$idx])){        


                }else{

                echo "

                    <main>

                        <section class='glass'>
            
                            <div id='products'>

                                <h3>
                                        Order Number:  $status_id[$idx]
                                        <br>
                                        <br>
                                                    
                                        Names of Product Purchased (Quantity):  &nbsp; $total_prod[$idx]
                                                
                                </h3> 
                                            
                                <table>
            
                                    <tr>

                                      
            
                                        <td>
                                            <a href='update_stat_ad.php? id= $status_id[$idx] '><button type= 'btn' class='button2'>UPDATE STATUS</button></a> 
                                            <a href='http://localhost/wst_page/rootfolder/insidefolders/order_status/stats_main.php'><button type= 'btn' class='button3'>LIVE VIEW</button></a>
                                            &nbsp;
                                        </td>
                                        <td>


                                            Name of Customer: &nbsp; $customer[$idx]       
                                            <br>
                                            <br>

                                            Phone Number: &nbsp; $phone[$idx]
                                            <br>
                                            <br>
            
                                            Total Price:&nbsp;₱&nbsp; $total_price[$idx]
                                            <br>
                                            <br>
                                                            
                                                <div id='stocks'>
            
                                                    Status: $status[$idx] &nbsp;
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