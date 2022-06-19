<?php 
 
    include 'connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT'S THE SCOOP? | Customer Order Status</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">

</head>
<body>

    <?php include 'header.php'; ?>

    <div id="title">ORDER STATUS</div>

    <br><br><br>


    <div id="ready">
  
        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_pay.php" > <img src="image/pack.gif" alt="pack" title="Packing"></a>

    </div>

    <div class="to_pay">
        
        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_pay.php"><div id="to_pay">TO PAY</div></a>

    </div>

    <div id="set">
      
        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_ship.php"><img src="image/ship.gif" alt="ship" title="Ship"></a>

    </div>

    <div class="to_ship">

        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_ship.php"><div id="to_ship">TO SHIP</div></a>

    </div>

    <div id="go">

        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_receive.php"><img src="image/receive.gif" alt="receive" title="Receive"></a>
  
    </div>
    
    <div class="to_receive">

        <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/to_receive.php"><div id="to_receive">TO RECEIVE</div></a>
    
    </div>
    
</body>
</html>