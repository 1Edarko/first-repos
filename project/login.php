<?php
session_start();
require "user.php";

$user= new user();
if($user->session())
{

header("location:indeex.php");

}
$user= new user();

if ($_SERVER['REQUEST_METHOD']=="POST"){

$login= $user->loginusers($_POST["email"] , $_POST['password']);
if($login){
header("location:indeex.php");
}
else{

    echo "login failed";
}

}









?>
<html>  
  
  <head>  
      <title>Log In</title>  
      <link rel="stylesheet" href="css/style.css" />  
  </head>  

  <body>  
      <div class="form">  
          <h1>Log In</h1>  
          <form action="" method="post">  
              <input type="text" name="email" placeholder="Please Enter Email" required />  
              <br />  
              <input type="password" name="password" placeholder="Please Enter Password" required />  
              <br />  
              <input type="submit" name="submit" value="Login" />  
          </form>  
          <p>Not registered yet?<a href="register.php"> Register Here</a></p>  
      </div>  
  </body>  

  </html>