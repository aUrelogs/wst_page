    <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shoppingcart"]))  
      {  
           $item_array_id = array_column($_SESSION["shoppingcart"], "product_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shoppingcart"]);  
                $item_array = array(  
                     'product_id'               =>     $_GET["id"],  
                     'product_name'               =>     $_POST["hidden_name"],  
                     'product_price'          =>     $_POST["hidden_price"],  
                     'product_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shoppingcart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'product_id'               =>     $_GET["id"],  
                'product_name'               =>     $_POST["hidden_name"],  
                'product_price'          =>     $_POST["hidden_price"],  
                'product_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shoppingcart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shoppingcart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shoppingcart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="shoppingcheckout.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Check out and Details</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  


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

    .orderdetailsbutton {
    background-color: #fa3c96;
    border-color: #fa3c96;
    border-radius: 40px;
    color: #ffffff;
    padding: 10px 30px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
     .checkoutbutton {
   background-color: #c2f2d0;
    border-color: #fa3c96;
    border-radius: 40px;
    color: #fa3c96;
    padding: 10px 50px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }

@font-face {
    font-family: 'Melted Font';
    src: url(fonts/MeltedDl-XdLg.ttf);
}

body {
    background-image: url(images/bgimg.PNG);
   background-size: 100%;
}

.bgcol{
    background-color: #c2f2d0;
    padding: 20px;
    border-radius: 50px;
    width: 90%;
    
}

.bgcol2{
    background-color: #c2f2d0;
    border-radius: 40px;
    width: 50%;
}


li, a{
    font-family: "Century Gothic";
    font-weight: 500;
    font-size: 20px;
    color: #6b3e26;
    text-decoration: none;
    cursor: pointer;
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 5%;
    background-color: #fdf5c9;

}

.logo{
    cursor: pointer;
    width: 40%;
}

.nav_links {
    list-style: none;
}
.nav_links li {
    display: inline-block;
    padding: 0px 20px;
    transition: all 0.3s ease 0s;
}

.container{
    width: 90%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}

.box {
    
    border: none;
    position: relative;
}

.error {
    background: #eeafaf;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
}



    </style>
<body style="margin: 0">
    <header >
        <div><img src="images/logo.png" style="width: 100px;"><img src="images/logoname.png" alt="logo"></div>
        <nav>
            <ul class ="nav_links">
                <li><font color="#fa3c96"> Back to Menu </font><img src="images/shoppingicon.png" class="logo" style="width: 25px;"><a href="">|  Admin</a></li>
            </ul>
        </nav>
    </header>
    <br><br><br>
<font face="Melted Font" size="50" color="#fa3c96"><center>SHOPPING CART</center></font>

<div align="center">
<font face="Century Gothic"><button class="orderdetailsbutton"><b>ORDER DETAILS</b></button></font>
</div>
           <br />  
        
                <?php  
                $query = "SELECT * FROM classic_table /* <-- DATABASE NG MAIN MENU */ ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
              
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Product Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["PRODUCT_NAME"]; ?></td>  
                               <td><?php echo $values["ITEM_QUANTITY"]; ?></td>  
                               <td>P <?php echo $values["PRODUCT_PRIICE"]; ?></td>  
                               <td>P <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">P <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  

<br /><br />
<div align="center">
<font face="Century Gothic"><button class="checkoutbutton"><b>CHECK OUT</b></button></font>
</div>

      </body>  
 </html>
