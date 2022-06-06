<?php 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $databaseName = "websysproj";

        //connection:
        $conn = new mysqli($host, $dbUsername, $dbPassword, $databaseName);
        if ($conn->connect_error) {
            die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
        }

        // echo "Connected";
        
?>