<?php 
require "user.php";

$user = new user();
if($_SERVER['REQUEST_METHOD']=='POST'){

$reg_date= date("Y-m-d H:i:s");  
$register = $user->registerusers($reg_date,$_POST['name'],$_POST['username'],$_POST['email'],$_POST['password']);  
if($register){  
   echo "Registration Successful!";  
}
else
{  
   echo "Entered email already exist!";  
}  
}
?>  
<html>  
  
  <head>  
      <title>Registration</title>  
      <link rel="stylesheet" href="css/style.css" />  
  </head>  

  <body>  
      <div class="form">  
          <h1>Registration</h1>  
          <form action="" method="post">  
              <input type="text" name="name" placeholder="Please Enter Name" required />  
              <br />  
              <input type="text" name="username" placeholder="Please Enter Userame" required />  
              <br />  
              <input type="text" name="email" placeholder="Please Enter Email" required />  
              <br />  
              <input type="password" name="password" placeholder="Please Enter Password" required />  
              <br />  
              <input type="submit" name="submit" value="Register" />  
          </form>  
          <p>Alredy Registered?<a href="login.php"> Login Here</a></p>  
      </div>  
  </body>  

  </html>  