<?php 

    include ('connection.php');

        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid'];

            $sql = "DELETE FROM `modify_products` WHERE id=$id";
            $result = mysqli_query($conn, $sql);

                if($result) {
                    header('location:displayprod.php');
                } else {
                    die (mysqli_error($conn));
                }
        }

?>