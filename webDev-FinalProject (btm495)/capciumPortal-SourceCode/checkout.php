<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <?php
    session_start();
    $getuserName='';

    if (isset($_SESSION['username'])){
        $getuserName = $_SESSION['username'];
    }
    ?>
</head>
<body>
    
<div id="grad1" class="banner"></div>

<p class="textBanner">CHECKOUT</p>
    
</body>
</html>


<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "capcium";

$db_obj = new mysqli($host, $username, $password, $database);

if(mysqli_connect_errno()){
    echo "fat l";
}

$query = "SELECT username, productQuantity, productPrice, productName, orderAmount FROM new_recipe WHERE username = '$getuserName' ";

$queryResult = $db_obj->query($query);

function htmlOrder(&$result_obj, $amt_name, $class)
{ if ( $result_obj->num_rows == 0 ) return "";
$tb = "<table border='1' class='" .$class. "'>\n";
$result_obj->data_seek(0);
$header_done = false;
$total=0.0; $cols=0;

while( $data = $result_obj->fetch_assoc() )
{ if (!$header_done) // table headers
{ $tb .= '<tr>';

$cols=count($data);
foreach($data as $attr => $value)
{ $tb .= "<th>$attr</th>"; }
$tb .= "</tr>\n";
$header_done = true;
}
$total += $data[$amt_name]; 
$tb .=("<tr><td>". implode("</td><td>", $data));
$tb .= "</td></tr>\n";
}
$total=number_format($total, 2, '.', ''); 
$tb .="<tr class='total'><td colspan='" .($cols-1) 
. "'>Total: </td><td>$total</td></tr>";
return ($tb . "</table>\n");
}


echo htmlOrder($queryResult,'orderAmount' ,'customers');

?>

<br><br><br>



<div class="mainscreen">
    
      <div class="card">
        <div class="leftside">
          <img
            src="image/pill.jpg"
            class="product"
          />
        </div>
        <div class="rightside">
          <form action="">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <p>Enter Address</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="name" required />
            <p>Card Number</p>
            <input type="number" class="inputbox" name="card_number" id="card_number" required />

            <p>Card Type</p>
            <select class="inputbox" name="card_type" id="card_type" required>
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="RuPay">Amex</option>
              <option value="MasterCard">MasterCard</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

            <p class="expcvv_text2">CVV</p>
            <input type="password" class="inputbox" name="cvv" id="cvv" required />
        </div>
            <p></p>
            <button type="submit" class="button">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
  


<style>


.card {
	width: 60rem;
    margin: auto;
    background: white;
    position:center;
    align-self: center;
    top: 50rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display:flex;
    flex-direction: row;
    
}

.leftside {
	background: #030303;
	width: 25rem;
	display: inline-flex;
    align-items: center;
    justify-content: center;
	border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
	width: 20em;
    height: 20em;
    border-radius: 100%;
}

.rightside {
    background-color: #ffffff;
	width: 35rem;
	border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
}

p{
    display:block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
}

.inputbox
{
    color:#030303;
	width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
    font-weight: 500;
  outline:none;
}

.expcvv {
    display:flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}

.expcvv_text{
    padding-right: 1rem;
}
.expcvv_text2{
    padding:0 1rem;
}

.button{
    background: linear-gradient(
135deg
, #753370 0%, #298096 100%);
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width:100%;
    letter-spacing: .11rem;
    outline:none;
}

.button:hover
{
	transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}

@media only screen and (max-width: 1000px) {
    .card{
        flex-direction: column;
        width: auto;
      
    }

    .leftside{
        width: 100%;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
      border-top-right-radius:0;
      border-radius:0;
    }

    .rightside{
        width:auto;
        border-bottom-left-radius: 1.5rem;
        padding:0.5rem 3rem 3rem 2rem;
      border-radius:0;
    }
}
</style>