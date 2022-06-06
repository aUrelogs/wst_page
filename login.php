<?php

if(isset($_POST["Login"]))
{
   $email = $_POST["Loginemail"];
   $Password = $_POST["LoginPassword"];
   
 
   require_once 'conn.php';
   require_once 'functions.php';

   if (emptyinputLogin($email, $Password) !== false){
   header("location: homepage.php?error=EmyptyLogin");
    exit();
   }
   
    Userlogin($conn, $email, $Password);
}
else
{
  header("location: homepage.php?error=Login");
  exit();
}
?>