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
    <title>WHAT'S THE SCOOP? | TO RECEIVE</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">





</head>
<body>

    <?php include 'header.php';?>

    <br>

    <?php

    for ($idx = 0; $idx < count($orderID); $idx++){

            
    if($status[$idx] == 3){

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

                            <div id='stocks'>

                                Track Number:  $status_id[$idx]
                                <br>
                                <br>

                                Name of Customer: &nbsp; $customer[$idx]       
                                <br>
                                <br>

                                Phone Number: &nbsp; $phone[$idx]
                                <br>
                                <br>

                                Total Price:&nbsp;₱&nbsp; $total_price[$idx]
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


    if($status[$idx] == 0){

        break;

    }


}




    ?>

</body>
</html>