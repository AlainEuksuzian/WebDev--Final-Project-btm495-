<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
session_start();

$getUsername = $_SESSION['username2'];
echo $getUsername;
?>


<body>
    

	<div id="grad1" class="banner"></div>

<p class="textBanner">UNFLAVORED YELLOW CAPSULES</p>

    
  
  <div class="pricing-table recommended">
      <h3 class="pricing-title">Unflavored Hard Capsules</h3>
      <div class="price">$30<sup>/  Per Pack</sup></div>
      <ul class="table-list">
          <form action="#" method="POST">
          <li>1 000 <span>Capsules</span></li>
          <li>7 <span>Day Delivery</span></li>
          <li>Enter Quantity:<span><input type="text" name="unflavoredHard"></span></li>
          
      </ul>
      <div class="table-buy">
          <input type="submit" class="pricing-action">
      </form>
      </div>
  </div>

  
</div>
</div>
<div class="location">

  <div class="fullpurchase">
      <img src="image/product3.jpg" alt="picture of first product" class="prod1">
  </div>


<div class="course"> 
    <footer>
        <p>BTM495, Final Project Prototype</p>
    </footer>
</div>
</body>
</html>

<style>
  * {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	color: #FFF;
	font-size: 62.5%;
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
}

ul {
	list-style-type: none;
}

a {
	color: #e95846;
	text-decoration: none;
}

.pricing-table-title {
	text-transform: uppercase;
	font-weight: 700;
	font-size: 2.6em;
	color: #FFF;
	margin-top: 15px;
	text-align: left;
	margin-bottom: 25px;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table-title a {
	font-size: 0.6em;
}

.clearfix:after {
	content: '';
	display: block;
	height: 0;
	width: 0;
	clear: both;
}
.pricing-wrapper {
	width: 960px;
	margin: 40px auto 0;
}

.pricing-table {
	margin: 0 10px;
	text-align: center;
	width: 300px;
	float: left;
	-webkit-box-shadow: 0 0 15px rgba(0,0,0,0.4);
	box-shadow: 0 0 15px rgba(0,0,0,0.4);
	-webkit-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
	transition: all 0.25s ease;
}

.pricing-table:hover {
	-webkit-transform: scale(1.06);
	-ms-transform: scale(1.06);
	-o-transform: scale(1.06);
	transform: scale(1.06);
}

.pricing-title {
	color: #FFF;
	background: #e95846;
	padding: 20px 0;
	font-size: 2em;
	text-transform: uppercase;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table.recommended .pricing-title {
	background: #2db3cb;
}

.pricing-table.recommended .pricing-action {
	background: #2db3cb;
}

.pricing-table .price {
	background: #403e3d;
	font-size: 3.4em;
	font-weight: 700;
	padding: 20px 0;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table .price sup {
	font-size: 0.4em;
	position: relative;
	left: 5px;
}

.table-list {
	background: #FFF;
	color: #403d3a;
}

.table-list li {
	font-size: 1.4em;
	font-weight: 700;
	padding: 12px 8px;
}

.table-list li:before {
	content: "\f00c";
	font-family: 'FontAwesome';
	color: #3fab91;
	display: inline-block;
	position: relative;
	right: 5px;
	font-size: 16px;
} 

.table-list li span {
	font-weight: 400;
}

.table-list li span.unlimited {
	color: #FFF;
	background: #e95846;
	font-size: 0.9em;
	padding: 5px 7px;
	display: inline-block;
	-webkit-border-radius: 38px;
	-moz-border-radius: 38px;
	border-radius: 38px;
}


.table-list li:nth-child(2n) {
	background: #F0F0F0;
}

.table-buy {
	background: #FFF;
	padding: 15px;
	text-align: left;
	overflow: hidden;
}

.table-buy p {
	float: left;
	color: #37353a;
	font-weight: 700;
	font-size: 2.4em;
}

.table-buy p sup {
	font-size: 0.5em;
	position: relative;
	left: 5px;
}

.table-buy .pricing-action {
	float: right;
	color: #FFF;
	background: #e95846;
	padding: 10px 16px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	font-weight: 700;
	font-size: 1.4em;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
	-webkit-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
	transition: all 0.25s ease;
}

.table-buy .pricing-action:hover {
	background: #cf4f3e;
}

.recommended .table-buy .pricing-action:hover {
	background: #228799;	
}

 @media only screen and (min-width: 768px) and (max-width: 959px) {
 	.pricing-wrapper {
 		width: 768px;
 	}

 	.pricing-table {
 		width: 236px;
 	}
	
	.table-list li {
		font-size: 1.3em;
	}

 }

 @media only screen and (max-width: 767px) {
 	.pricing-wrapper {
 		width: 420px;
 	}

 	.pricing-table {
 		display: block;
 		float: none;
 		margin: 0 0 20px 0;
 		width: 100%;
 	}
 }

@media only screen and (max-width: 479px) {
	.pricing-wrapper {
		width: 300px;
	}
} 
</style>

<?php

$host = "localhost";
$usernme = "root";
$password = "";
$my_db = "capcium";

$db_obj = new mysqli($host, $usernme, $password, $my_db);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){



    $unflavoredHardCapsQuantity = $_POST['unflavoredHard'];


	if($unflavoredHardCapsQuantity > 0){

		 
        $productName = 'UNFLAVORED HARD CAPSULES';
        $productPrice = 30.0;
        $orderAmount =  $unflavoredHardCapsQuantity * $productPrice;

        $queryInsert = "INSERT INTO new_recipe (username, productName, productPrice, productQuantity, orderAmount)
    VALUES ('$getUsername', '$productName' , '$productPrice', '$unflavoredHardCapsQuantity', ' $orderAmount' )";


if ($db_obj->query($queryInsert) == TRUE){ 
	$creatComplete = true; 
}

	}

	else {
		?> <script>alert("quantity must be over 0")</script>
<?php	}


}




?>