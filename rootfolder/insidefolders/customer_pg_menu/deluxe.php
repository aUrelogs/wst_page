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
    <title>Deluxe Menu</title>
</head>
<style>
.AddtoCartbutton {
  background-color: #fa3c96;
  border-color: #fa3c96;
  border-radius: 40px;
  color: #ffffff;
  padding: 8px 15px;
  text-align: center;
  font-size: 15px;
  margin: 4px 2px;
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
<font face="Melted Font" size="6" color="#fa3c96"><center>DELUXE MENU</center></font>
<table align="center">
    <tr>
        <td><div style="margin: 0px 80px 0px 0px;">
        <img src="images/90_s Kid Mix.png" alt="ice cream" style="width:200px;height:200px;" class="img"></div>
        </td>
        <td>
            <font face="Century Gothic" size="5" color="#fa3c96"><b>TUBE AND LID CONTAINER ICE CREAM</b></font>
            <br><br>
            <font face="Century Gothic">
            <b>Price per milliliter/Liter(mL/L):</b><br>
            <input type="radio" id="deluxe_430" name="deluxesizes" value="430mL" style="height:13px; width:20px;">
            <label for="deluxe_430">430 mL | P100</label><br>
            <input type="radio" id="deluxe_1L" name="deluxesizes" value="1L" style="height:13px; width:20px;">
            <label for="deluxe_1L">1 L | P240</label><br>
            <input type="radio" id="deluxe_2L" name="deluxesizes" value="2L" style="height:13px; width:20px;">
            <label for="deluxe_2L">2 L | P300</label><br>
            <input type="radio" id="deluxe_3.8L" name="deluxesizes" value="3.8L" style="height:13px; width:20px;">
            <label for="deluxe_3.8L">3.8 L | P480</label><br>
            </font>
        </td>
    </tr>
    <tr>
        <td align="center"><div style="margin: 0px 80px 0px 0px;"><button class="AddtoCartbutton">Add to Cart</button></div></td>
        <td>
            <font face="Century Gothic">
            <b>Flavors:</b><br>
            <input type="radio" id="Kids_Mix" name="deluxeflavor" value="90's Kids Mix" style="height:13px; width:20px;">
            <label for="Kids_Mix">90's Kids Mix</label>
            <input type="radio" id="Brown_Sugar" name="deluxeflavor" value="Brown Sugar Milk Te" style="height:13px; width:20px;">
            <label for="Brown_Sugar">Brown Sugar Milk Tea</label>
            <input type="radio" id="Mango_Graham" name="deluxeflavor" value="Mango Graham" style="height:13px; width:20px;">
            <label for="Mango_Graham">Mango Graham</label>
            <input type="radio" id="Campfire_Smores" name="deluxeflavor" value="Campfire Smores" style="height:13px; width:20px;">
            <label for="Campfire_Smores">Campfire Smores</label> <br>
            <input type="radio" id="Choco_Butternut" name="deluxeflavor" value="Choco Butternut" style="height:13px; width:20px;">
            <label for="Choco_Butternut">Choco Butternut</label>
            <input type="radio" id="Cookie_Cheesecake" name="deluxeflavor" value="Cookie Cheesecake" style="height:13px; width:20px;">
            <label for="Cookie_Cheesecake">Cookie Cheesecake</label>
            <input type="radio" id="Milk_Cookies" name="deluxeflavor" value="Milk and Cookies" style="height:13px; width:20px;">
            <label for="Milk_Cookies">Milk and Cookies</label>
            </font>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
        <br>
            <font face="Century Gothic">
            <b>Additions:</b><br>
            <input type="radio" id="Sprinkles" name="Sprinkles" value="Sprinkles" style="height:13px; width:20px;">
            <label for="Sprinkles">Sprinkles | P30</label>
            <input type="radio" id="Marshmallows" name="Marshmallows" value="Marshmallows" style="height:13px; width:20px;">
            <label for="Marshmallows">Marshmallows | P30 ||</label>
            <label for="Cones">Ice Cream Cones:</label>
            <input type="number" id="Cones" name="Cones" min="0" max="50" value="0" class="inputcones" style="height:20px; width:100px;">
            <br>
            <br>
            <table>
                <tr>
                    <td valign="Top"><div style="margin: 0px 100px 0px 0px;">
                    <b>Quantity:</b><br>
                    <input type="number" id="Quantity" name="Quantity" min="0" max="50" value="0" class="inputcones" style="height:20px; width:100px;">
                    </div></td>
                    <td>
                    <b>Stock Quantity:</b><br>
                    </td>
                </tr>
                
            </table>
            </font>
        </td>
    </tr>
    <tr>
         <td align="center"><div style="margin: 0px 80px 0px 0px;"><a href="menu.php"><button class="AddtoCartbutton">Back to Menu</button></a></div></td>
    </tr>
</table>
<br><br>
<table align="center" style="width:100%">
    <tr>
        <td align="center"><img src="images/90_s Kid Mix.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Brown Sugar Milk Tea.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Campfire Smores.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Coco Butternut.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>90's Kids Mix 1L</b> </font></td>
        <td align="center"><font face="Century Gothic"><b>Brown Sugar Milk Tea</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Campfire Smores</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Choco Butternut</b></font></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
<table align="center" style="width:100%">
    <tr>
        <td align="center"><img src="images/Cookie Cheesecake.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Mango Graham.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Milk _ Cookies.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>Cookie Cheesecake</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Mango Graham</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Milk & Cookies</b></font></td>
    </tr>
</table>
<br><br><br><br>
</body>
</html>