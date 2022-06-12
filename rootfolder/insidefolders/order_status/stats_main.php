<?php 
 
    include'connection.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What's the Scoop | Customer Order Status</title>

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
  
        <a href="#" > <img src="image/pack.gif" alt="pack" title="Packing"></a>

    </div>

    <div class="to_pay">
        
        <a href="#"><h3>To Pay</h3></a>

    </div>

    <div id="set">
      
        <a href="#"><img src="image/ship.gif" alt="ship" title="Ship"></a>

    </div>

    <div class="to_ship">

        <a href="#"><h3>To Ship</h3></a>

    </div>

    <div id="go">

        <a href="#"><img src="image/receive.gif" alt="receive" title="Receive"></a>
  
    </div>
    
    <div class="to_receive">

        <a href="#"><h3>To Receive</h3></a>
    
    </div>
    
</body>
</html>