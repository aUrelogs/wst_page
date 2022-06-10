<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>



<!-- STYLE PART -->
   <style>

   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

@font-face {
   font-family: 'Melted Font';
   src: url(fonts/MeltedDl-XdLg.ttf);
}

body {
    background-image: url(images/bgimg.PNG);
   background-size: 100%;
}

li, a{
   font-family: 'Melted Font';
   font-weight: 500;
   font-size: 20px;
   color: #6b3e26;
   text-decoration: none;
   cursor: pointer;
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





*{
   font-family: 'Century Gothic';
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.container{
   max-width: 1200px;
   margin:0 auto;
   /* padding-bottom: 5rem; */
}

section{
   padding:2rem;
}



.btn,
.option-btn,
.delete-btn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: #6b3e26;
   color:var(--white);
   font-size: 1.7rem;
   font-family: 'Melted Font';
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: #6b3e26;
   color: white;
}

.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: #ffcb85;
}

.delete-btn{
   margin-top: 0;
   background-color: #ffcb85;
}

.message{
   background-color: #ffcb85;
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: #fdf5c9;
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:#6b3e26;
}

.message i{
   font-size: 2.5rem;
   color:#6b3e26;
   cursor: pointer;
}

.message i:hover{
   color:#6b3e26;
}

.header{
   background-color: #fdf5c9;
   position: sticky;
   top:0; left:0;
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   padding:1.5rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color: #6b3e26;
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:black;
}

.header .flex .navbar a:hover{
   color:#ffc5d9;
}

.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:black;
}

.header .flex .cart:hover{
   color:#ffc5d9;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: #6b3e26;
   color:#ffc5d9;
   font-size: 2rem;
}

#menu-btn{
   margin-left: 2rem;
   font-size: 3rem;
   font-family: 'Melted Font';
   cursor: pointer;
   color:#c2f2d0;
   display: none;
}

.add-product-form{
   max-width: 50rem;
   background-color: #fdf5c9;
   border-radius: .5rem;
   padding:2rem;
   margin:0 auto;
   margin-top: 2rem;
}

.add-product-form h3{
   font-size: 2.5rem;
   margin-bottom: 1rem;
   color:#fdf5c9;
   text-transform: uppercase;
   text-align: center;
}

.add-product-form .box{
   text-transform: none;
   padding:1.2rem 1.4rem;
   font-size: 1.7rem;
   color:#6b3e26;
   border-radius: .5rem;
   background-color: #c2f2d0;
   margin:1rem 0;
   width: 100%;
}

.display-product-table table{
   width: 100%;
   text-align: center;
   border-style:groove;
   background-color: #ffcb85;
   
}

.display-product-table table thead th{
   padding:1.5rem;
   font-size: 2rem;
   background-color: #6b3e26;
   color:#fdf5c9;
   
}

.display-product-table table td{
   padding:1.5rem;
   font-size: 2rem;
   color:#6b3e26;
}

.display-product-table table td:first-child{
   padding:0;
}

.display-product-table table tr:nth-child(even){
   background-color: #6b3e26;
}

.display-product-table .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: #ffc5d9;
   color:#6b3e26;
   font-size: 2rem;
   padding:1.5rem;
}

.edit-form-container{
   position: fixed;
   top:0; left:0;
   z-index: 1100;
   background-color: #c2f2d0;
   padding:2rem;
   display: none;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   width: 100%;
}

.edit-form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color:#fdf5c9;
   text-align: center;
   padding:2rem;
}

.edit-form-container form .box{
   width: 100%;
   background-color: #6b3e26;
   border-radius: .5rem;
   margin:1rem 0;
   font-size: 1.7rem;
   color:#6b3e26;
   padding:1.2rem 1.4rem;
   text-transform: none;
}

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: center;
}

.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: #c2f2d0;
   border:#ffcb85;
   border-radius: .5rem;
}

.products .box-container .box img{
   height: 25rem;
}

.products .box-container .box h3{
   margin:1rem 0;
   font-size: 2.5rem;
   color:#6b3e26;
}

.products .box-container .box .price{
   font-size: 2.5rem;
   color:#6b3e26;
}

.shopping-cart table{
   text-align: center;
   width: 100%;
}

.shopping-cart table thead th{
   padding:1.5rem;
   font-size: 2rem;
   color:black;
   background-color: #ffc5d9;
   
}

.shopping-cart table tr td{
   border-bottom: #c2f2d0;
   padding:1.5rem;
   font-size: 2rem;
   color:white;
}

.shopping-cart table input[type="number"]{
   border: #ffcb85;
   padding:1rem 2rem;
   font-size: 2rem;
   color:#6b3e26;
   width: 10rem;
}

.shopping-cart table input[type="submit"]{
   padding:.5rem 1.5rem;
   cursor: pointer;
   font-size: 2rem;
   background-color: #ffcb85;
   color: black;
}

.shopping-cart table input[type="submit"]:hover{
   background-color: #6b3e26;
   color: white;
}

.shopping-cart table .table-bottom{
   background-color: #ffc5d9;
}

.shopping-cart .checkout-btn{
   text-align: center;
   margin-top: 1rem;
   font-size: 10px;
}

.shopping-cart .checkout-btn a{
   display: inline-block;
   width: auto;
}

.shopping-cart .checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: #6b3e26;
   color:#ffc5d9;

}
.checkout-form form{
   padding:2rem;
   border-radius: .5rem;
   background-color: var(--bg-color);
}

.checkout-form form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 2rem;
   color:#6b3e26;
}

.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: #fdf5c9;
   font-size: 1.7rem;
   color:#6b3e26;
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1.4rem;
   text-transform: none;
   border:var(--border);
}

.display-order{
   max-width: 50rem;
   background-color: #fdf5c9;
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:#6b3e26;
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: var(--red);
   color:#fdf5c9;
   padding:1rem;
   margin-top: 1rem;
}

.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: scroll;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1100;
   background-color: black;
   width: 100%;
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: #fdf5c9;
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:1rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: #fdf5c9;
   border-radius: .5rem;
   color:#6b3e26;
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: #ffc5d9;
   color:#ffcb85;
}

.order-message-container .message-container .customer-details{
   margin:1.5rem 0;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:var(--black);
}

.order-message-container .message-container .customer-details p span{
   color:var(--blue);
   padding:0 .5rem;
   text-transform: none;
}



/* media queries  */

@media (max-width:1200px){

   .shopping-cart{
      overflow-x: scroll;

   }

   .shopping-cart table{
      width: 120rem;
   }

   .shopping-cart .heading{
      text-align: left;
   }

   .shopping-cart .checkout-btn{
      text-align: left;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: #c2f2d0;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      margin:2rem;
      display: block;
      text-align: center;
      font-size: 2.5rem;
   }

   .display-product-table{
      overflow-x: scroll;
   }

   .display-product-table table{
      width: 90rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .products .box-container{
      grid-template-columns: 1fr;
   }

}
</style>





</head>
<body style="margin: 0;  background-image: url(images_/bgimg.PNG);
   background-size: 100%;">

<?php include 'header.php'; ?>

<div class="container">

<section class="shopping-cart">

<font face="Melted Font" size="50" color="#fa3c96"><center>SHOPPING CART</center></font>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td>P<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form>   
            </td>
            <td>P<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="http://localhost/wst_page/rootfolder/insidefolders/customer_pg_menu/products.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
            <td colspan="3">grand total</td>
            <td>P<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="http://localhost/wst_page/rootfolder/insidefolders/customer_checkout/checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>