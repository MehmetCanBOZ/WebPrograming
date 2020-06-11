<?php
  session_start();
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
       <script src="functions.js" async></script>
        <link rel="stylesheet" href="style2.css" type="text/css">
        <link rel="prefetch" href="images/logo.png">
        <link rel="prefetch" href="images/logo2.png">
        <link rel="prefetch" href="images/running2.jpg">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title></title>
    </head>
    <body>
<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

        <nav>
            <div class="navBar" id="navBar">
                <a href="home.php"><img src = "images/logo.png" alt = "Logo" width ="170" height="70" class ="logo" id="logo"></a>
                <a href="home.php">HOME</a>
                <a href="service.php">SERVICES</a>
                <a href="bmi.php">BMI</a>
                <a href="classes.php">BOOK ONLINE CLASS</a>

                <a href="contactt.php">CONTACT US</a>
                <a href="profile.php">PROFILE  <?php echo $_SESSION['username']; ?></a>
               
                  <a href="home.php?logout='1'" style="color: white;">LOGOUT </a> 
                <?php endif ?>
            </div>
        </nav>
     




    </body>
</html>