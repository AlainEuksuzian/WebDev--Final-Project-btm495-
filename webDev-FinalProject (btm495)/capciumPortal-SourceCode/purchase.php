<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Online Purchase</title>
    <?php
session_start();

$getfullName =  $_SESSION['name2'];
$getUsername =  $_SESSION['username2'];


echo $getfullName .$getUsername;



?>
</head>
<body >
    <div>

    </div>

    <div >
    <div class = "navBar bodyall">
        <p class="logoNav">CAPCIUM</p>
        <a href="register2.php" class="button button2 button3"><p class="text ">sign up</p></a>
        <a href="homepage.php"><img src="image/homepage.jpg" alt="" class="homepage"></a>
        <a href="aboutUs.php" class="aboutUs">about Us</a>
        <a href="checkout.php"> <img src="image/cart.jpg" alt="" class="cart"></a>
       </div>
    </div>
    
<img src="https://static.wixstatic.com/media/0d6674_ad3c09ca05aa4e2fbecc088e87d09799~mv2.png/v1/fill/w_1902,h_781,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/0d6674_ad3c09ca05aa4e2fbecc088e87d09799~mv2.png" alt="" style="object-fit: cover; object-position: 50% 50%; width: 100%;" fetchpriority="high" class="bann">

<h1>
    <div class="body body2"  >
        <div class="animation">
            <a  href="" class="typewrite" data-period="2000" data-type='[ "Cutting-Edge Delivery Solutions", "Softgel Encapsulation Experts", "High Quality & Compliance " ]'>
                <span class="wrap"></span>
              </a>
            </h1>
        </div>
        
    </div>
<img src="image/ubanner.JPG" alt="">
<img src="image/ubanner2.JPG" alt="" class="ubanner2">

<H1  class="title">CAPCIUM, LEADERS IN:</H1>

    <div class="productOne zoom1" >
        <img src="image/product1.jpg" alt="product One image" class="product1">
        <div class="product1Explanation">
            <div style="color: black;" class="product1-Title">Yellow Soft Gel Round Capsules</div>
            <p style="color: black;">Description:</p>
            <p style="color: black;">Our round shaped yellow softgel are easy to swallow and fast acting.</p>
                 <p style="color: black;"> encapsulation solutions. With custom flavor and branding as well as halal and kosher certification on a project by project basis.</p>
               <a href="productOnePurchase.php" class="button button2 product1Button">PURCHASE</a>
        </div>
        
    </div>
    <br><br><br><br>

    <div class="productOne zoom1">
        <img src="image/product2.jpg" alt="product Two image" class="product1">
        <div class="product1Explanation">
            <div class="product1-Title" style="color: black;">Blue Unflavored Sofgtel Round Capsules</div>
            <p style="color: black;">Description:</p>
            <p style="color: black;">Our round shaped unflavored blue softgel are easy to swallow and fast acting.</p>
                 <p style="color: black;"> Safe Encapsulation solutions. Halal and kosher certification on a project by project basis.</p>
               <a href="productTwoPurchase.php" class="button button2 product1Button">PURCHASE</a>
        </div>
        
    </div>

    <br><br><br><br>

    <div class="productOne zoom1">
        <img src="image/product3.jpg" alt="product Three image" class="product1">
        <div class="product1Explanation">
            <div class="product1-Title" style="color: black;">Yellow Unflavored Hardcap Capsules</div>
            <p style="color: black;">Description:</p>
            <p style="color: black;">Our long shaped yellow Hardcap calsules are easy to swallow and long acting.</p>
                 <p style="color: black;"> encapsulation solutions. Unflavored as well as halal and kosher certification on a project by project basis.</p>
               <a href="productThreePurchase.php" class="button button2 product1Button">PURCHASE</a>
        </div>
        
    </div>

    <br><br><br><br>

    <br><br><br>
    <hr class="footer-line">

    <div class="footer">
        <footer class="footer">
        <p class="textFoot">Alain Euksuzian</p>
        <p class="textFoot">Loric Vezin</p>
        <p class="textFoot">Caroline Halac</p>
        <p class="textFoot">Kim Thuc Anh</p>
        <p class="textFoot">Farhan Priyonto</p>
        <p class="textFoot">Justine Castellani</p>
    </footer></div>

    <div class="course"> 
        <footer>
            <p class="textFoot">BTM495, Final Project Prototype</p>
        </footer>
    </div>
</div>

</body>
</html>

<script>
    var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { 
        delta /= 2; 
    }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }

    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

</script>


<style>

.bodyall{
        position: relative;
        bottom: 25px;
    }

    .textFoot{
        color: black;
    }


    .body{
    
        text-align: center;
        height: 100px;
    }

    .animation{
        position: relative;
        top:25px;
    }

    .bann{
        height: 500px;
    }
    

* { color:white; text-decoration: none;}

.body2{
    position: relative;
    bottom: 250px;
}

.title{
    position: relative;
    bottom:850px;
    font: white;
}

.ubanner2{
    position: relative;
    bottom: 30px;
}

  </style>


