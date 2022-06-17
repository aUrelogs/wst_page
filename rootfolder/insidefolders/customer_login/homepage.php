<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>WHAT'S THE SCOOP? - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body style=" background-image: url(images_/bgimg.PNG);
   background-size: 100%;">

<header style="display: flex; justify-content: space-between; align-items: center; padding: 10px 5%; background-color: #fdf5c9;">
    <img src="images_/logo.png" class="logo" style="width: 100px;">
        <img class="logo" src="images_/logoname.png" alt="logo" style="margin-right: 250px;">
        <nav>
            <ul class ="nav_links">
                <li style="list-style: none; font-family: Century Gothic; font-weight: 300; font-size: 10px; color: #6b3e26; text-decoration: none; cursor: pointer;">
                <a href="http://localhost/wst_page/rootfolder/"><img src="images_/userlogoo.png" class="logo" style="width: 15px;"> Admin Login</a></li>
            </ul>
        </nav>
    </header>

    <img src = "images_/icecreamslides.gif" style="padding: 60px">
        <form action="login.php" method="post">
            <div class="content">
                    <div class="form">
                        <h2>Login Here</h2>
                        <input type="email" name="Loginemail" placeholder="Enter Email">
                        <input type="password" name="LoginPassword" placeholder="Enter Password Here">
                        <button class="btnn" type="submit" name="Login">LOGIN</button>

                        <p class="link">New customer?<br>
                        <a href="#" id = "button">Sign up </a> here first</a>
                   </div>
            </div>
        </form>
        
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!--sign up modal-->
    <form action="signup-inc.php" method="post">
        <div class="bg-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-logo">REGISTER</h5>
                    <div class="close-modal" id= "close">+</div>
                </div>
                <div class="input-modal">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="tel" name="mobilenumber" placeholder="Mobile Number:">
                     <input type="text" name="firstname" placeholder="First Name:">
                    <input type="text" name="lastname" placeholder="Last Name:">
                    <input type="text" name="address" placeholder="Address:">
                    <input type="text" name="areacode" placeholder="Area Code:">
                    <input type="text" name="username" placeholder="Username:">
                    <input type="password" name="Password" placeholder="Password:">
                    <input type="password" name="ConfirmPassowrd" placeholder="Confirm Password:">
                    <button class="btnn" type="submit" name="submit">CONTINUE</button>
                </div>
            </div>
        </div>
    </form>
</body>

<script >
    
    document.getElementById('button').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display ='flex';
    });
    document.getElementById('close').addEventListener('click', function(){
    document.querySelector('.bg-modal').style.display ='none';
    });
</script>

</html>