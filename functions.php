<?php
function emptyinputSignup ($email, $mobilenumber, $firstname,
$lastname, $address, $areacode, $username, $Password, $ConfirmPassowrd)
{
$result;
if (empty($email) || empty($mobilenumber) || empty($firstname)|| empty($lastname)|| empty($address)
|| empty($areacode)|| empty($username) || empty($Password) || empty($ConfirmPassowrd))
{
 $result = true;
}
else {
    $result = false;
}
return $result;
}

function InvalidUID ($username)
{
$result;
if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
{
 $result = true;
}
else {
    $result = false;
}
return $result;
}

function InvalidEmail($email)
{
$result;
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
 $result = true;
}
else {
    $result = false;
}
return $result;
}


function PasswordMatch($Password, $ConfirmPassowrd)
{
$result;
if ($Password !== $ConfirmPassowrd)
{
 $result = true;
}
else {
    $result = false;
}
return $result;
}


Function uidExist($conn, $username, $email)
{
$sql = "SELECT * FROM signup WHERE username = ? or Email_add = ? ;";
$stnt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stnt, $sql)){
    header("location: homepage.php?error=UsernameExist");
    exit();
}
mysqli_stmt_bind_param($stnt, "ss", $username, $email);
mysqli_stmt_execute($stnt);

$resultData = mysqli_stmt_get_result($stnt);

if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
}
else {
    $result = false;
    return $result;
}
mysqli_stmt_close($stnt);
}



Function createUser($conn, $email, $mobilenumber, $firstname, $lastname, $address, $areacode, $username, $Password)

{
$sql = "INSERT INTO signup (Email_add, Mobile_Num, First_Name, Last_name, User_Address, ZipCode, Username, User_Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
$stnt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stnt, $sql))
{
    header("location: homepage.php?error=filenotsave");
    exit();
}

$HashPassword = password_hash($Password, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stnt, "ssssssss", $email, $mobilenumber, $firstname,
$lastname, $address, $areacode, $username, $HashPassword);
mysqli_stmt_execute($stnt);
mysqli_stmt_close($stnt);
header("location: homepage.php?error=none");
    exit();
}



function emptyinputlogin ($email, $Password)
{
$result;
if (empty($email) || empty($Password))
{
 $result = true;
}
else {
    $result = false;
}
return $result;
}

Function Userlogin($conn, $email, $Password)
{
    $uidexist = uidExist($conn, $email, $email);

    if ($uidexist === false)
    {
    header("location: homepage.php?error=InvalidUsernameorEmail");
    exit();
    }

    $pwdhash = $uidexist["User_Password"];
    $checkpwd = password_verify($Password, $pwdhash);

    if ($checkpwd === false)
    {
        echo $pwdhash;
    // header("location: homepage.php?error=InvalidPassword");
    // exit();
    }
    else if ($checkpwd === true)
    {
        session_start();
        $_SESSION["userID"] = $uidexist["userID"];
        $_SESSION["Username"] = $uidexist["Username"];

        header("location: homepage.php?loginsuccessfull");
        exit();
    }

}


?>