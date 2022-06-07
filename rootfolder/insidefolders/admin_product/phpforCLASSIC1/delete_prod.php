<?php 

    //classic for bread
    include ('connection.php');
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid'];

            $sql = "DELETE FROM `classic_bread` WHERE id=$id";
            $result = mysqli_query($conn, $sql);

                if($result) {
                    header ('location: http://localhost/wst_page/rootfolder/insidefolders/admin_product/displayprod.php');
                } else {
                    die (mysqli_error($conn));
                }
        }

?>