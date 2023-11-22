<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
</head>
<body>

    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="sign up.css">
</head>
<body>
    <form class="lform" action="#" method="post">

        <h1 id="lgn">Sign Up</h1>
        
        
        <hr id="h-r">
        <input type="text" placeholder="Enter Full Name" required name="fullName" autocomplete="off">
        <input type="text" placeholder="Creat Username" required name="username" autocomplete="off">
      <input type="email" placeholder="Enter Your Email" required name="email" autocomplete="off">
      <input type="text" placeholder="Enter Address" required name="address" autocomplete="off">
      <input type="text" placeholder="Enter Postal Code" required name="postalCode" autocomplete="off">

        <input id="pswrd2" type="password" placeholder="Creat Password" required autocomplete="off">
        <p id="checkbx"><input id="checkb2" type="checkbox" onclick="passwordToTextTwo()" >Show Password</p>
       
        <input id="pswrd" type="password" placeholder="Re-Enter Password" required name="password" autocomplete="off">
       
        <p id="checkbx"><input id="checkb" type="checkbox" onclick="passwordToText()">Show Password</p>
        <input type="submit" value="Verfiy Password" onmouseover="comparePassword()" autocomplete="off">
        <input type="submit" value="Sign Up" class="submitbtn">
    </form>

   
  
    <div></div>
</body>
</html>
<script>
    function passwordToText(){
    var pass = document.getElementById("pswrd");
    if (pass.type == "password"){
        pass.type= "text";
    } else{
        pass.type="password";
    }
}

function passwordToTextTwo(){
    var pass2 = document.getElementById("pswrd2");
    if (pass2.type == "password"){
        pass2.type= "text";
    } else{
        pass2.type="password";
    }
}

function comparePassword(){
    var pass1 = document.getElementById("pswrd").value;
    var pass2 = document.getElementById("pswrd2").value;

    if (pass1 != pass2 ){
        alert("Password does not match!");
    }
    else if (pass1 == pass2 && pass1 != ""){
        alert("Password Matched!")
    }

}

</script>



<?php

$host = "localhost";
$usernme = "root";
$password = "";
$my_db = "capcium";

$db_obj = new mysqli($host, $usernme, $password, $my_db);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $postalCode = $_POST['postalCode'];
    $password = $_POST['password'];

    
    $queryInsert = "INSERT INTO users (fullName, username, email, address, postalcode, password)
    VALUES ('$fullName', '$username' , '$email', '$address', '$postalCode', '$password' )";

    $creatComplete = false;

    if ($db_obj->query($queryInsert) == TRUE){ 
        $creatComplete = true;  ?>
        <script>alert("success") </script>

    <?php        
   }
    if ($creatComplete == true){
        header("Location: homepage.php"); 
    }

    }
?>

</body>

</html>



<style>

    .submitbtn:hover {

    box-shadow: 0 0 5px #f0f,0 0 25px #f0f, 0 0 50px #f0f, 0 0 100px #f0f;
    
    }
</style>

