<header class="header">

   <div class="flex">

      <a href="#" class="logo"><img src="images/logo.png" style="width: 100px;"></a>

      <nav class="navbar">
         <a href="http://localhost/wst_page/rootfolder/">add products</a>
         <a href="products.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="http://localhost/wst_page/rootfolder/insidefolders/shoppingcart/cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>