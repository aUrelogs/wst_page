<?php

if(isset($_POST["submit"])){

   $email = $_POST["email"];
   $mobilenumber = $_POST["mobilenumber"];
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $address = $_POST["address"];
   $areacode = $_POST["areacode"];
   $username = $_POST["username"];
   $Password = $_POST["Password"];
   $ConfirmPassowrd = $_POST["ConfirmPassowrd"];
 
   require_once 'conn.php';
   require_once 'functions.php';

   if (emptyinputSignup($email, $mobilenumber, $firstname, $lastname, $address, $areacode, $username, $Password, $ConfirmPassowrd) !== false){
   header("location: homepage.php?error=stmtfailed");
    exit();
   }
   if (InvalidUID($username) !== false){
    header("location: homepage.php?error=InvalidUsername");

    exit();
    }
    if (InvalidEmail($email) !== false){
        header("location: homepage.php?error=invalidEmail");
   
        exit();
    }
    if (PasswordMatch($Password, $ConfirmPassowrd) !== false){
        header("location: homepage.php?error=PasswordNotMatch");
 
        exit();
    }
    if (uidExist($conn, $username, $email) !== false){
        header("location: homepage.php?error=UsernameExistorEmailExist");

        exit();
    }

    createUser($conn, $email, $mobilenumber, $firstname,
    $lastname, $address, $areacode, $username, $Password);
}
else{
  echo "error";
  exit();
}