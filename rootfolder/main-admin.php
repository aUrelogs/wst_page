<?php 

    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>What's The Scoop? - ADMIN</title>
</head>
<body style="margin: 0">
    
    <header>
    <a href="http://localhost/wst_page/"><img src="images/logo.png" class="logo" style="width: 100px;"></a>
      <img class="logo" src="images/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
                <li><img src="images/userlogoo.png" class="logo" style="width: 20px;"> Welcome <?php echo $_SESSION['username']; ?> | <a href = index.php>Log out</a></li>
            </ul>
        </nav>
    </header>

    <div style="margin: 10%;">
        <table align="center">
            <tr>
                <th><a href="insidefolders/admin_summary/summaryreports.php"><img src="images/report.png" width="60%"></a></th>
                <th><a href="insidefolders/admin_stocks/stocks.php"><img src="images/warehouse.png" width="60%"></a></th>
                <th><a href="insidefolders/admin_product/admin.php"><img src="images/edit.png" width="60%"></a></th>
                <th><a href="http://localhost/wst_page/rootfolder/insidefolders/order_status_admin/admin_stat_main.php"><img src="images/order.png" width="60%"></a></th>
            </tr>
            <tr align="center">
                <td><a href="insidefolders/admin_summary/summaryreports.php"><font face="Century Gothic" size="10">SUMMARY REPORTS</a></font></td>
                <td><a href="insidefolders/admin_stocks/stocks.php"><font face="Century Gothic" size="10">STOCKS / STORAGE</font></td>
                <td><a href="insidefolders/admin_product/admin.php"><font face="Century Gothic" size="10">PRODUCT MANAGER</font></td>
                <td><a href="http://localhost/wst_page/rootfolder/insidefolders/order_status_admin/admin_stat_main.php"><font face="Century Gothic" size="10">ORDER STATUS</font></td>
            </tr>
        </table>
    </div>
    
</body>
</html>

<?php 

    }else {
        header ("location: index.php");
        exit();
    }

?>