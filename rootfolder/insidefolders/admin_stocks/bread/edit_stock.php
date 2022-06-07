<?php

    include 'connection.php';

    $id = "-1";

    if(!isset($_GET['id'])){
        header('Location: stocks.php');
        exit();
    }

    $id = $_GET['id'];
    $productQuant = "";

    //-------------------------------------------------------------------------//
    $sql = "
    SELECT
    *
    FROM 
        `classic_stocks_bread` as b

    LEFT JOIN 
        `classic_bread` as c ON b.id = c.id

    ";
    //-------------------------------------------------------------------------//

    $sql = "SELECT * FROM `classic_stocks_bread` WHERE `id` = $id;";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        
        while($row = $result->fetch_assoc()){
            
            $productQuant = $row["PRODUCT_QTY"];

        }

    }else{
        echo "0 result";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="design_edit_stocks.css">
    
        <title>Edit Quantity</title>

</head>
<body style="margin: 0px">

    <header>

        <img src="images/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">

        <nav>
            <ul class ="nav_links">
                <li> <img src="images/userlogoo.png" class="logo" style="width: 20px;"> | <a href="http://localhost/wst_page/rootfolder/index.php">Admin Log Out</a></li>
            </ul>

        </nav>

    </header>

    <div class="name_of_page">
        <div id="title">Modify Quantity</div>
    </div>

    <main>
        
        <div class="glass">

            <div id="products">

                <form action="save_stocks.php" method="post">

                    <input type="hidden" name="stock_id" value="<?php echo $id; ?>" />
                    
                    <input type="number" id = "product_stocks" name= "product_stocks" value="<?php echo $productQuant ?> " placeholder = "Type Quantity" min="0"/>

                    <input type= "submit" value="SUBMIT">

                    <br>

                       <div id="current">

                            <br>

                            <?php

                                echo "Current:" . "&nbsp;" . $productQuant;
                            
                                if($productQuant == 0 ){
                                    echo "&nbsp;No stock";
                                } elseif($productQuant == 1){
                                    echo "&nbsp;Piece";
                                }else{
                                    echo "&nbsp;Pieces";
                                }
                               
                            ?>

                        </div>

                </form>

            </div>

            <div class="main1">
                <a href='http://localhost/wst_page/rootfolder/insidefolders/admin_stocks/stocks.php'><button class='btn1'>CANCEL</button></a>
            </div>

            <br>

        </div>

    </main>

</body>
</html>
























