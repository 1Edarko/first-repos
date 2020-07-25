<?php include("classes/index.php");?>

<html>

<head>
<title>Login To your Account</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/styling.css" />
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&family=Varela+Round&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="css/fontawesome.min.css" />

</head>

<body>
<div class="container">

    <form class="form-control" method="POST">
    <h2>Login To your Account</h2>
    
        <input  class="input-fields" type="text" name="email" placeholder="Enter Username Or Email" > 
        <input  class="input-fields" type="password" name="password" placeholder="Enter password" >
        <div class="forget-pass">Forget password? <a href="forget-pass.php" >Click Here</a></div>
        <input type="submit" value="Login" name="Lg" class="btn-login">
        <div class="sing-up">Don't Have Account <a href="register.php" >Sign Up</a></div>


    </form>
</div>

</body>









</html>