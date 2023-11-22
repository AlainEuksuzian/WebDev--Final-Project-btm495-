<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <form action="#" method="POST">
                <div class="inputBox">
                    <input type="text" required name="usernameInput" autocomplete="off">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required name="passwordInput">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="register2.php">Forgot Password ?</a>
                    <a href="register2.php" class="loginText">SignUp</a>
                </div>
                    <input type="submit" class="button">                
                </form>
            </div>
        </div>
    </body>
    </html>
</body>
</html>


<?php 

session_start();

$host = "localhost";
$usernme = "root";
$password = "";
$my_db = "capcium";

$db_obj = new mysqli($host, $usernme, $password, $my_db);
$getUsername = "";
$getPassword = "";
$getFullname = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $userName_input = $_POST['usernameInput'];
    $password_input = $_POST['passwordInput'];

    $query = "SELECT username, password, fullName FROM users WHERE username = '$userName_input'";

    $queryResult = $db_obj->query($query);

    $output = array();

    while($result = $queryResult->fetch_assoc()){
        $output[] = $result;
    }

    foreach ($output as $getResult){
        $getUsername = $getResult['username'];
        $getPassword = $getResult['password'];
        $getFullname = $getResult['fullName'];
        
    }
    if ($getUsername == $userName_input && $getPassword == $password_input){
        $islogged = true;
        $_SESSION['log'] = $islogged;
        $_SESSION['name'] = $getFullname;
        $_SESSION['username'] = $getUsername;
        header("Location: homepage.php");
    }
}
?>

