<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Bread Menu</title>
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
            <img src="images/placeholderpic.png" alt="logo"></div>
        </td>
        <td>
            <font face="Century Gothic">
            <b>Flavors (P50 Each):</b><br>
            <input type="radio" id="Pandesal_Ice" name="bread" value="Pandesal Ice Cream" style="height:13px; width:20px;">
            <label for="Pandesal_Ice">Pandesal Ice Cream</label><br>
            <input type="radio" id="Strawberry_Pandesal" name="bread" value="Strawberry Pandesal" style="height:13px; width:20px;">
            <label for="Strawberry_Pandesal">Strawberry Pandesal</label><br>
            <input type="radio" id="Ube_Pandesal" name="bread" value="Ube Pandesal" style="height:13px; width:20px;">
            <label for="Ube_Pandesal">Ube Pandesal</label><br>
            <input type="radio" id="Mochi" name="bread" value="Mochi" style="height:13px; width:20px;">
            <label for="Mochi">Mochi</label><br><br>
            <b>Additions:</b><br>
            <input type="radio" id="Sprinkles" name="Sprinkles" value="Sprinkles" style="height:13px; width:20px;">
            <label for="Sprinkles">Sprinkles | P30</label>
            <input type="radio" id="Marshmallows" name="Marshmallows" value="Marshmallows" style="height:13px; width:20px;">
            <label for="Marshmallows">Marshmallows | P30 ||</label>
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
                    <b>Shipping Details:</b><br>
                    Shipping To: Placeholder Location<br>
                    Shipping Fee: Placeholder Location<br>
                    </td>
                </tr>
            </table>
            </font>
        </td>
    </tr>
    <tr>
    <td align="center"><div style="margin: 70px 80px 0px 0px;"><a href="classic.php"><button class="classicbutton">Back to Classic Menu</button></a></div><br>
        <div style="margin: 0px 80px 0px 0px;"><a href="menu.php"><button class="classicbutton">Back to Menu</button></a></div></td>
    </tr>
</table>
</body>
</html>