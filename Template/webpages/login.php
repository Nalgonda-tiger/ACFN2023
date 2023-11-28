<?php
require_once '../includes/config_session.inc.php';
require_once '../includes/signup_view.inc.php';
require_once '../includes/login_view.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    
</head>

<body>
<header>
        <ul>
            <li><a href="/Programming/Template/webpages/main.html">Home</a></li>
            <li><a href="/Programming/Template/webpages/aboutus.html">About Us</a></li>
            <li><a href="/Programming/Template/webpages/contact.html">Contact</a></li>
            <button class="buttonlogin" onclick=signinclick()><li class="butlog">Login</li></button>
            <button class="signupbutton" onclick=signupclick()><li class="signupli">Sign up</li></button>
        </ul>
    </header>
    <div class="bg">

    <div class="forms">
        <div class="login">
            <div class="loginformdiv">
            <?php
            check_login_errors();
            ?>
            <form action="../includes/login.inc.php" method="post">
                <label for="logintext" class="formtitle">LOGIN</label> <br><br>

                <label for="username" class="formcontent">Username</label><br>
                <input type="text" class="username" name="username"><br>

                <label for="password" class="formcontent">Password</label><br>
                <input type="text" class="password" name="pword"><br>

                <input type="submit" class="submitbutton">
            </form>
            <br><br>
            <button class="signuplink">Don't have an account? Click here to sign up!</button>
            </div>
        </div>
        
        <div class="signup">
            <div class="loginformdiv">
            <?php
            check_signup_errors();
            ?>
            <form action="../includes/signup.inc.php" method="post">
                <label for="signuptext" class="formtitle">SIGN UP</label><br><br>
                <?php
                signup_inputs()
                ?>
                <input type="submit" class="submitbutton">

            </form>
            <br><br>
            <button class="signinlink">Have an account? Click here to sign in!</button>
            </div>
        </div>
    </div>
    </div>
    <div class="footerclass">
    <footer class="bottomfooter">
        <div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
                integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

            <div class="linkscontainer">
                <span><a href="https://www.twitter.com" class="links"><i class="fab fa-twitter"></i></a></span>
                <span><a href="https://www.facebook.com" class="links"><i class="fab fa-facebook-f"></i></a></span>
                <span><a href="https://www.youtube.com" class="links"><i class="fab fa-youtube"></i></a></span>
                <span><a href="https://www.instagram.com" class="links"><i class="fab fa-instagram"></i></a></span>
            </div>
        </div>
    </footer>
    </div>
</body>

<script src="../scripts/main.js"></script>


</html>