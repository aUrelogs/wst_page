<?php 
    session_start();

    include ('connection.php');

    if(isset($_POST['username']) && isset($_POST['username'])) {
       function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }

        $user = validate($_POST['username']);
        $pass = validate( $_POST['password']);

        if(empty($user)){
            header("location: index.php?error=User name is required");
            exit();

        } else if (empty($pass)){
            header("location: index.php?error=Password is required");
            exit();

        } else {
           $sql = "SELECT * FROM admin WHERE username = '$user' AND password ='$pass'";
           $result = mysqli_query($conn, $sql);

           if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if($row['username'] === $user && $row['password'] = $pass){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];
                    header ("location: main-admin.php");
                    exit();
                } else {
                    header("location: index.php?error=Incorrect Username of Password");
                    exit();
                }
           } else {
            header("location: index.php?error=Incorrect Username of Password");
            exit();
           }
        }

    } else {
        header("location: index.php");
        exit();
    }

?>