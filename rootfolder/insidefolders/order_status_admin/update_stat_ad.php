




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT'S THE SCOOP | UPDATE STATUS</title>
    <link rel="stylesheet" type="text/css" href="design_edit_stats.css">


</head>
<body style="margin: 0%">

    <header>
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">

        <nav>
            <ul class ="nav_links">
                 <a href="http://localhost/wst_page/rootfolder/index.php"> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | Admin Log Out</a>
            </ul>
        </nav>

    </header>

    <div id="title">MODIFY QUANTITY</div>

    <main>
        
        <div class="glass">

            <div id="products">

                <form action="admin_stat_main.php" method="post">

                    <input type="hidden" name="stock_id" value="<?php echo $id; ?>" />
                    
                    <input type="number" id = "product_stocks" name= "product_stocks" value="<?php echo $productQuant ?> " placeholder = "Type Quantity" min="0"/>

                    <input type= "submit" value="SUBMIT">

                    <br>

                       <div id="current">

                            <br>

                            <?php

                                echo "Type: <br>";

                                echo"
                               
                                    <li> 0 for to pay <br> </li>
                                    <li> 1 for to ship <br> </li>
                                    <li> 2 for to receive <br> </li>
                             
                                ";
                                

                                echo "Current Status:" . "&nbsp;" ;
                                
                            
                                // if( == 0 ){
                                //     echo "&nbsp;No stock";
                                // } elseif( == 1){
                                //     echo "&nbsp;Piece";
                                // }else{
                                //     echo "&nbsp;Pieces";
                                // }
                               
                            ?>

                        </div>

                </form>

            </div>

            <div class="main1">
                <a href='admin_stat_main.php'><button class='btn1'>CANCEL</button></a>
            </div>

            <br>

        </div>

    </main>


    
    
</body>
</html>