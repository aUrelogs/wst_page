<header class="header">

   <div class="flex">

   <div><img src="images/logo.png" style="width: 100px;"><img src="images/logoname.png" alt="logo"></div>
   
      <nav class="navbar">
         <a href="http://localhost/wst_page/rootfolder/">Admin</a>
         <a href="http://localhost/wst_page/rootfolder/insidefolders/customer_pg_menu/products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="http://localhost/wst_page/rootfolder/insidefolders/shoppingcart/cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>