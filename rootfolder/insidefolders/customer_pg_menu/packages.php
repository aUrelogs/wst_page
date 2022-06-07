<?php

    include 'connection.php';

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Packages Menu</title>
</head>
<style>
.classicbutton {
  background-color: #fa3c96;
  border-color: #fa3c96;
  border-radius: 40px;
  color: #ffffff;
  padding: 8px 15px;
  text-align: center;
  font-size: 15px;
  margin: 0px 2px;
  cursor: pointer;
}
.inputcones {
    background-color: #ddf5e4;
    border-style: none;
    border-radius: 4px;
}
body {
   background-image: url(images/bgimg2.png);
   background-size: 100%;
}
.img {
  border: 5px ridge #fa3c96;
}
</style>
<body style="margin: 0">
    <header >
        <div><img src="images/logo.png" style="width: 100px;"><img src="images/logoname.png" alt="logo"></div>
        <nav>
            <ul class ="nav_links">
                <li><font color="#fa3c96"> My Cart </font><img src="images/shoppingicon.png" class="logo" style="width: 25px;">|<a href="index.php"> Admin Log In</a> <img src="images/userlogoo.png" class="logo" style="width: 20px;"></li>
            </ul>
        </nav>
    </header>
    <br>
<font face="Melted Font" size="6" color="#fa3c96"><center>PACKAGES MENU</center></font>
<table align="center">
    <tr>
        <td><div style="margin: 0px 80px 0px 0px;">
        <img src="images/Combo1.png" alt="ice cream" style="width:200px;height:200px;" class="img"></div>
        </td>
        <td>
            <font face="Century Gothic">
                <br>
            <font face="Century Gothic" size="5" color="#fa3c96"><b>COMBO PACKAGES</b></font><br>
            <?php 
              $sql = "SELECT * FROM `packages_table`";
              $result = mysqli_query($conn, $sql);

              if($result) {
                  while($row = mysqli_fetch_assoc($result)){
              
                      $productNAME = $row['PRODUCT_NAME'];
                      $productPRICE = $row['PRODUCT_PRICE'];
                      $productDESC = $row['PRODUCT_DETAIL'];
            
            echo '
            <font face="Century Gothic">
            <input type="radio" id="classic_10oz" name="classicsizes" value="10oz" style="height:13px; width:20px;">
            <label for="classic_10oz">'.$productNAME.' | ₱ '.$productPRICE.'</label><br>
           
            </font>'; 
              }
         }
            ?><br>

            <b>Additions:</b><br>
            <input type="radio" id="Sprinkles" name="Sprinkles" value="Sprinkles" style="height:13px; width:20px;">
            <label for="Sprinkles">Sprinkles | P30</label>
            <input type="radio" id="Marshmallows" name="Marshmallows" value="Marshmallows" style="height:13px; width:20px;">
            <label for="Marshmallows">Marshmallows | P30</label>
            <br>
            </font>
        </td>
    </tr>
    <tr>
        <td align="center"><div style="margin: 0px 80px 0px 0px;"><button class="classicbutton">Add to Cart</button></div></td>
    </tr>
    <tr>
        <td></td>
        <td valign="Top">
            <font face="Century Gothic">
            <table>
                <tr>
                    <td valign="Top"><div style="margin: 0px 100px 0px 0px;">
                    <b>Quantity:</b><br>
                    <input type="number" id="Quantity" name="Quantity" min="0" max="50" value="0" class="inputcones" style="height:20px; width:100px;">
                    </div></td>
                    <td>
                    <b>Stock Quantity:</b><br>

                    <?php

                        $sql = "
                        SELECT
                        *
                        FROM 
                            `packages_table_stocks` as pack
                        LEFT JOIN 
                            `packages_table` as e ON pack.id = e.id

                        ";


                        $result = $conn->query($sql);

                        $stocksIDs = [];
                        $stocksQTY = [];

                        if($result->num_rows > 0){

                            $idx = 0;

                            while($row = $result->fetch_assoc()){

                                $stocksIDs[$idx] = $row["id"];
                                $stocksQTY[$idx] = $row["PRODUCT_QTY"];
                                $prodName[$idx] = $row["PRODUCT_NAME"];
                    
                                $idx++;

                            }
                        }else{
                            echo "0 result";
                        }


                            for($idx=0; $idx < count($stocksIDs); $idx++){
                                                
                                if(empty($prodName[$idx])){

                                    // die();

                                }else{

                                    echo  $prodName[$idx] .":". "&nbsp" .  $stocksQTY[$idx]. "<br>";


                                }
                            }

                    ?>

                    </td>
                </tr>
            </table>
            </font>
        </td>
    </tr>
    <tr>
    <td align="center">
        <div style="margin: 70px 80px 0px 0px;"><a href="menu.php"><button class="classicbutton">Back to Menu</button></a></div></td>
    </tr>
</table>
<br><br>
<table align="center" style="width:100%">
    <tr>
        <td align="center"><img src="images/Combo1.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Combo2.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Combo3.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>90's Kids Mix 1L + Pandesal Ice Cream</b> </font></td>
        <td align="center"><font face="Century Gothic"><b>Brown Sugar Milk Tea 1L + Mochi</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Campfire Smores 1L + Strawberry Pandesal</b></font></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td align="center"><img src="images/Combo4.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Combo5.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Combo6.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>Choco Butternut 1L + Strawberry Pandesal</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Ube Caramelized Sugar 26oz + Ube Pandesal</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Mango Dark Chocolate 26oz + Mochi</b></font></td>
    </tr>
</table>
<br><br><br><br>
</body>
</html>