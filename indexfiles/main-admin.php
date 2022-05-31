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
<body>
    
    <header>
    <img src="images/logo.png" class="logo" style="width: 100px;">
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
                <th><a href="SummaryR/summaryreports.html"><img src="images/report.png" width="60%"></a></th>
                <th><a href="Stocks/stocks.php"><img src="images/warehouse.png" width="60%"></a></th>
                <th><a href="displayprod.php"><img src="images/edit.png" width="60%"></a></th>
            </tr>
            <tr align="center">
                <td><a href="SummaryR/summaryreports.html"><font face="Century Gothic" size="20">SUMMARY REPORTS</a></font></td>
                <td><a href="Stocks/stocks.php"><font face="Century Gothic" size="20">STOCKS / STORAGE</font></td>
                <td><a href="displayprod.php"><font face="Century Gothic" size="20">PRODUCT MANAGER</font></td>
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