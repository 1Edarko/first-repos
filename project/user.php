<?php
require_once "configDB.php";
class user {
    function __construct(){
$db= new DB();
    }
public function checkuser($email , $username){
$data=" SELECT * FROM users where username='$username' and email = '$email'";
$result= array($data);

}if (empty($result)){


}




    }  







?>