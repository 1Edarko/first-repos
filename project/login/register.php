<?php include("classes/index.php");?>

<html>

<head>
<title>Create your Account</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/styling.css" />
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@600&family=Varela+Round&display=swap" rel="stylesheet"/>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="css/fontawesome.min.css" />


</head>

<body>
<div class="container">

    <form class="form-control" method="POST">

    <h2>SignUp To Create Account</h2>
    <?php
    if(!empty($errors)){
        echo "<div class='alert'>";
        foreach($errors as $error){
            echo "<span class='icon'>&#9888 $error</span>
            ";
        }
        echo "</div>";
    }

    ?>

    <?php
    if(!empty($messages)){
        echo "<div class='message'>";
        foreach($messages as $msg){
            echo "<span class='icon'>&#10004 $msg</span>";
        }
        echo "</div>";
    }

    ?>
       <input  class="input-fields" type="text" name="email" placeholder="Enter Email" > 
        <input  class="input-fields" type="text" name="username" placeholder="Enter Username"  > 
        <input  class="input-fields" type="password" name="password" placeholder="Enter password"  >
        <input  class="input-fields" type="password" name="password_confirm" placeholder="Confirm Password"  >
        <input type="submit" value="Sign-Up" id="submit-btn" name="Rg" class="btn-login">
        
        <div class="sing-up">Already Have Account ?<a href="login.php" >Sign in</a></div>


    </form>

</div>

<!-- <script>
window.addEventListener('load', function() {
    document.getElementById('submit-btn').addEventListener('click', function(e) {
        e.preventDefault()
    })
})
</script> -->

</body>









</html>