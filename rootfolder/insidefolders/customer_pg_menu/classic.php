<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Classic Menu</title>
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
<font face="Melted Font" size="6" color="#fa3c96"><center>CLASSIC MENU</center></font>
<table align="center">
    <tr>
        <td><div style="margin: 0px 80px 0px 0px;">
        <img src="images/Mango Salted Caramel.png" alt="ice cream" style="width:200px;height:200px;" class="img"></div>
        </td>
        <td>
            <font face="Century Gothic" size="5" color="#fa3c96"><b>SMALL CONTAINER ICE CREAM</b></font>&nbsp;&nbsp;
            <a href="bread.php"><button class="classicbutton">Bread Ice Cream Menu</button></a>
            <br><br>
            <font face="Century Gothic">
            <b>Price per ounce(oz):</b><br>
            <input type="radio" id="classic_10oz" name="classicsizes" value="10oz" style="height:13px; width:20px;">
            <label for="classic_10oz">10 oz | P40</label><br>
            <input type="radio" id="classic_16oz" name="classicsizes" value="16oz" style="height:13px; width:20px;">
            <label for="classic_16oz">16 oz | P60</label><br>
            <input type="radio" id="classic_26oz" name="classicsizes" value="26oz" style="height:13px; width:20px;">
            <label for="classic_26oz">26 oz | P70</label><br>
            <input type="radio" id="classic_32oz" name="classicsizes" value="32oz" style="height:13px; width:20px;">
            <label for="classic_32oz">32 oz | P80</label><br>
            </font>
        </td>
    </tr>
    <tr>
        <td align="center"><div style="margin: 0px 80px 0px 0px;"><button class="classicbutton">Add to Cart</button></div></td>
        <td>
            <font face="Century Gothic">
            <b>Flavors:</b><br>
            <input type="radio" id="Avocado_Machiatto" name="classicflavor" value="Avocado Machiatto" style="height:13px; width:20px;">
            <label for="Avocado_Machiatto">Avocado Machiatto</label>
            <input type="radio" id="Macapuno_Caramel" name="classicflavor" value="Macapuno Caramel" style="height:13px; width:20px;">
            <label for="Macapuno_Caramel">Macapuno Caramel</label>
            <input type="radio" id="Mango_Dark" name="classicflavor" value="Mango Dark Chocolate" style="height:13px; width:20px;">
            <label for="Mango_Dark">Mango Dark Chocolate</label> <br>
            <input type="radio" id="Mango_Salted" name="classicflavor" value="Mango Salted Caramel" style="height:13px; width:20px;">
            <label for="Mango_Salted">Mango Salted Caramel</label>
            <input type="radio" id="Ube_Caramelized" name="classicflavor" value="Ube Caramelized Sugar" style="height:13px; width:20px;">
            <label for="Ube_Caramelized">Ube Caramelized Sugar</label>
            <input type="radio" id="Ube_Keso" name="classicflavor" value="Ube Keso" style="height:13px; width:20px;">
            <label for="Ube_Keso">Ube Keso</label>
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
            <label for="cones">Ice Cream Cones:</label>
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
         <td align="center"><div style="margin: 0px 80px 0px 0px;"><a href="menu.php"><button class="classicbutton">Back to Menu</button></a></div></td>
    </tr>
</table>
<br><br>
<table align="center" style="width:100%">
    <tr>
        <td align="center"><img src="images/Avocado Macchiato.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Macapuno Caramel.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Mango Dark Chocolate.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>Avocado Macchiato</b> </font></td>
        <td align="center"><font face="Century Gothic"><b>Macapuno Caramel</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Mango Dark Chocolate</b></font></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td align="center"><img src="images/Mango Salted Caramel.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Ube Caramelized Sugar.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
        <td align="center"><img src="images/Ube Keso.png" alt="ice cream" style="width:200px;height:200px;" class="img"></td>
    </tr>
    <tr>
        <td align="center"><font face="Century Gothic"><b>Mango Salted Caramel</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Ube Caramelized Sugar</b></font></td>
        <td align="center"><font face="Century Gothic"><b>Ube Keso</b></font></td>
    </tr>
</table>
<br><br><br><br>
</body>
</html>