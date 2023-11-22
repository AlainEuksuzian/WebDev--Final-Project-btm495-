<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capcium E-Commerce</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
session_start();
$nameget='';
$getusername = '';
if (isset($_SESSION['name'])){
    $nameget = $_SESSION['name'];
    $getusername = $_SESSION['username'];
}


$_SESSION['name2'] = $nameget;
$_SESSION['username2'] = $getusername;
?>


<!---style= "background-color: #c8b7a6;"-->

<body style="background-color:#f6f7fc " >
    <div class="navBarLoc">
    <div class = "navBar" style="border-radius:50px; width: 1710px;">
        <p class="logoNav">CAPCIUM</p>
        <a href="login.php" class="button button2 button3"><p class="text ">Log in</p></a>
        <a href="homepage.php"><img src="image/homepage.jpg" alt="" class="homepage"></a>
        <a href="aboutUs.php" class="aboutUs">about Us</a>
        <a href="checkout.php"> <img src="image/cart.jpg" alt="" class="cart"></a>
       </div>
    </div>
    <img src="image/bannerText.JPG" alt="">


    <img src="image/caps.JPG" alt="picture of capsule" class="capsPic">


   

    <hr class="line-1">
    <br><br><br><br>
    
   
    <a href="purchase.php"><img src="image\online-shopping.jpg" alt="purchase picture" class="image1 zoom" style="border-style: solid"></a>
    
    <a href="login.php"> <img src="image\loginAnchor.jpg" alt="Login picture" class="image2 zoom" style="border: 10px solid black "></a>
    <br><br><br>
    <a href="aboutUs.php"> <img src="image\aboutusAnchor.jfif" alt="about us picture" class="image3 zoom"></a>
    <a href="register2.php"><img src="image\signup.jpg" alt="tracking order picture" class="image4 zoom"></a>
    <br><br><br><br>
    <hr class="footer-line">

    
    <div class="footer">
        <footer class="footer">
        <p>Alain Euksuzian</p>
        <p>Loric Vezin</p>
        <p>Caroline Halac</p>
        <p>Kim Thuc Anh</p>
        <p>Farhan Priyonto</p>
        <p>Justine Castellani</p>
    </footer></div>

    <div class="course"> 
        <footer>
            <p>BTM495, Final Project Prototype</p>
        </footer>
    </div>

    <style>
        .zoom:hover {
  transform: scale(1.13); 
}
    </style>
    

    </body>
</html>




