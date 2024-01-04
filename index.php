<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="login">   
<h3 class="login-header">Facebook Login</h3>
<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>"> 
    <p> <input type="text" name="username" placeholder="USERNAME" > </p>
    <p> <input type="password" name="pass" placeholder="PASSWORD" ></p>
    <p> <input type="submit" value="Login"></p>
</div>
</form>


<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $userN=$_POST['username'];
    $passN=$_POST['pass'];
if ($userN=="ahmed" && $passN=="123") {
    $_SESSION['login'] =$userN && $_SESSION['login_p'] =$passN ;
    header("location:home.php"); 
}

}
echo"<pre>";
print_r($_POST);
?>
</body>
</html>