<?php 
 
    include 'connection.php';

    $sql = "
    SELECT
    *
    FROM 
        `check_out_prod` as a
    LEFT JOIN 
        `order` as c ON a.id = c.id

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
    <title>WHAT'S THE SCOOP?  | TO SHIP</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">


</head>
<body>

    <?php include 'header.php';?>

    <?php

for ($idx = 0; $idx < count($status_id); $idx++){

            
    if($status[$idx] == 2){

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
    break;
    }


    if($status[$idx] == 0){

        echo "You don't have any purchase OR Your order is on processing";
        break;

    }

 






}

       



    ?>





</body>
</html>