<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title> Admin Portal</title>
</head>
<body>

    <header>
    <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 200px;">

            <ul class ="nav_links">
                <li><a href="insidefolders/customer_pg_menu/menu.php">Customer Page</a>|<a href="index.php"> Admin Log In</a></li>
            </ul>

    </header>
<br><br><br><br>

<div class="container">
    <div class="box">
        <img src="images/iceice.png" alt="icecreamshopgraphics" width="800px">
    </div>
    &emsp; 
    <div class="box">
       <br><br><br><br>
        <div class="bgcol">
            <form action="login.php" method="POST">
             <br>
             <font face="Melted Font" size="50" color="#fa3c96"><center>ADMIN</center></font>
             
             <?php if(isset($_GET['error'])) { ?>
                <p class = "error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <table align="center">
                    <tr>
                        <td>
                            <input type="text" name="username" placeholder="User Name" >
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Password" ></td>
                    </tr>
                    <tr align="left">
                        <td><input class="login" type="submit" value="Log In"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
        
</body>
</html>