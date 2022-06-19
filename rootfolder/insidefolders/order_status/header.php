<header class="header">

   <div class="flex" >


     


      <a href="http://localhost/wst_page/rootfolder/insidefolders/customer_pg_menu/products.php" class="logo"><img src="image/logo.png" style="width: 90px;">
      <img class="logo" src="image/logoname.png" alt="logo" style="margin-right: 150px;"></a>


      <nav class="navbar">
         <a href="http://localhost/wst_page/rootfolder/">Admin</a>
         <a href="http://localhost/wst_page/rootfolder/insidefolders/customer_pg_menu/products.php">View Products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="http://localhost/wst_page/rootfolder/insidefolders/shoppingcart/cart.php" class="cart"> cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

      <nav class="navbar">
         <a href="http://localhost/wst_page/rootfolder/insidefolders/order_status/stats_main.php">Order Status</a>
      </nav>

   </div>

</header>