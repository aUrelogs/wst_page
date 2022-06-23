<header class="header">

   <div class="flex">

   <a href="http://localhost/wst_page/"><img src="images_/logo.png" style="width: 90px;"></a>
   <img class="logo" src="images_/logoname.png" alt="logo" style="margin-right: 150px;">


      <nav class="navbar">
         <a href="http://localhost/wst_page/rootfolder/">Admin</a>
         <a href="http://localhost/wst_page/rootfolder/insidefolders/customer_pg_menu/products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>