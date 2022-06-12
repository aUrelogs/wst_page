<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHAT'S THE SCOOP | ADMIN ORDER STATUS</title>
    <link rel="stylesheet" type="text/css" href="design_stats.css">

</head>
<body style="margin: 0px">

    <header>
        
        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">

        <nav>
            <ul class ="nav_links">
                <li> <a href="http://localhost/wst_page/rootfolder/index.php"> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | Admin Log Out</a></li>
            </ul>
        </nav>

    </header>

    
    
    <div id="title">UPDATE ORDER STATUS</div>
   

    <main>
        <a href='http://localhost/wst_page/rootfolder/main-admin.php'><button class='button1'>BACK TO MAIN</button></a>
    </main>

    <br>

    <?php

        // for($idx=0; $idx < count($stockid); $idx++){
                            
            // if(empty($pname[$idx])){

                // die();

            // }else{
                echo"
                    
                    <main>

                        <section class='glass'>

                            <div id='products'>

                                <h3>
                                    Order Number: 
                                    <br>
                                    <br>
                                    
                                    Product Name:  &nbsp;
                                
                                </h3> 
                                
                                    <table>

                                        <tr>

                                            <td>
                                                <a href='update_stat_ad.php? id=          '><button type= 'btn' class='button2'>UPDATE STATUS</button></a> 
                                                <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_product/admin.php'><button type= 'btn' class='button3'>LIVE VIEW</button></a>
                                                &nbsp;
                                            </td>
                                            <td>
                                                    Product Details:        &nbsp; 
                                                    <br>
                                                    <br>

                                                    Quantity of Orders:  &nbsp; 
                                                    <br>
                                                    <br>
                                                
                                                        <div id='stocks'>
                                                    
                                                        Total Price:&nbsp;₱         &nbsp; 
                                                            <br>
                                                            <br>

                                                        </div>
                                            </td>
                            
                                        </tr>

                                    </table>

                            </div>

                        </section>

                    </main>

                    <br>
                ";

            // }

        // }
        
        

    ?>
















    
</body>
</html>