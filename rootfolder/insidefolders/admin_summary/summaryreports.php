<?php 

    include('connection.php');

   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="justanothercss.css">
    
    <title>Summary Reports</title>
</head>
<body style="margin: 0px;">
    
    <header>
    <a href="https://localhost/wst_page/"><img src="images/logo.png" class="logo" style="width: 100px;"></a>
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
             <li><img src="images/userlogoo.png" class="logo" style="width: 20px;"> Welcome Admin | <a href ="http://localhost/wst_page/rootfolder/index.php">Log out</a></li> 
            </ul>
        </nav>
    </header>
    
    <div class = "bgcol container my-5">
    <div class="container">
    
        <a href="http://localhost/wst_page/rootfolder/main-admin.php" class="text-light"><button class="btn btn-danger my-4">
        BACK TO MAIN</button></a>
        
        <h3>SALE SUMMARY</h3>
       
        <table class="table table-dark">
            <thead>
            <tr align="center">
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                     $sql = "SELECT * FROM `cart`";
                     $result = mysqli_query($conn, $sql);
                     $grandtotal = 0;
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                              
                                $productNAME = $row['name'];
                                $productPRICE = $row['price'];
                                $productDESC = $row['quantity'];
                                $total = $row['price'] * $row['quantity'];

                                $grandtotal += $total;

                                echo '<tr align="center">
                             
                                <td>'.$productNAME.'</td>
                                <td>'."₱ ".$productPRICE.'</td>
                                <td>'." ".$productDESC.'</td>
                                <td>'."₱ ".$total.'</td>
                                </tr>'
                                ;
                            } 
                        }
                        echo '  
                        <tr align = center>
                            <td>  </td>
                            <td>  </td>
                            <th style = "color: red; "> GRAND TOTAL: </th>
                            <th style = "color: red; ">'."₱ ".$grandtotal.' </th>
                        </tr>
                       
                      ';
                        
        
                        
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <div class = "bgcol container my-5">
    <div class="container">
    
        <h3>TOP 5 MOST PURCHASED PRODUCT</h3>
        <table class="table table-dark">
            <thead>
                <tr align="center">
                
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                     $sql = "SELECT * FROM `cart` ORDER BY quantity DESC LIMIT 5";
                     $result = mysqli_query($conn, $sql);
                     $grandtotal = 0;
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)){
                              
                                $productNAME = $row['name'];
                                $productPRICE = $row['price'];
                                $productDESC = $row['quantity'];
                                $total = $row['price'] * $row['quantity'];

                                $grandtotal += $total;

                                echo '<tr align="center">
                             
                                <td>'.$productNAME.'</td>
                                <td>'."₱ ".$productPRICE.'</td>
                                <td>'." ".$productDESC.'</td>
                                <td>'."₱ ".$total.'</td>
                                </tr>'
                                ;
                            } 
                        }
                        echo '  
                        <tr align = center>
                            <td>  </td>
                            <td>  </td>
                            <th style = "color: red; "> GRAND TOTAL: </th>
                            <th style = "color: red; ">'."₱ ".$grandtotal.' </th>
                        </tr>
                       
                      ';
                        
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <div class = "bgcol container my-5">
    <div class="container">
    
        <h3>TOP 5 LEAST PURCHASED PRODUCT</h3>
        <table class="table table-dark">
            <thead>
                <tr align="center">
            
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM `cart` ORDER BY quantity ASC LIMIT 5";
                    $result = mysqli_query($conn, $sql);
                    $grandtotal = 0;
                       if($result) {
                           while($row = mysqli_fetch_assoc($result)){
                             
                               $productNAME = $row['name'];
                               $productPRICE = $row['price'];
                               $productDESC = $row['quantity'];
                               $total = $row['price'] * $row['quantity'];

                               $grandtotal += $total;

                               echo '<tr align="center">
                            
                               <td>'.$productNAME.'</td>
                               <td>'."₱ ".$productPRICE.'</td>
                               <td>'." ".$productDESC.'</td>
                               <td>'."₱ ".$total.'</td>
                               </tr>'
                               ;
                           } 
                       }
                       echo '  
                       <tr align = center>
                           <td>  </td>
                           <td>  </td>
                           <th style = "color: red; "> GRAND TOTAL: </th>
                           <th style = "color: red; ">'."₱ ".$grandtotal.' </th>
                       </tr>
                      
                     ';
                  
                ?>
            </tbody>
        </table>
    </div>
    </div>



</body>
</html>

<?php 

 

?>