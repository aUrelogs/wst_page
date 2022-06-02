<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Menu</title>
</head>

    <style>
    .button {
    background-color: #c2f2d0;
    border-color: #fa3c96;
    border-radius: 40px;
    color: #fa3c96;
    padding: 15px 50px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .orderbutton {
    background-color: #fa3c96;
    border-color: #fa3c96;
    border-radius: 40px;
    color: #ffffff;
    padding: 15px 32px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
    <br><br><br>
<font face="Melted Font" size="50" color="#fa3c96"><center>MENU</center></font>
<table align="center" style="width:100%">
    <tr>
        <td align="center"><div style="margin: 0px 0px 0px 19px;"><a href="classic.php"><button class="button">CLASSIC</button></a></div></td>
        <td align="center"><button class="button">DELUXE</button></td>
        <td align="center"><button class="button">PACKAGES</button></td>
    </tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div align="center">
<button class="orderbutton">ORDER</button>
</div>
</body>
</html>
