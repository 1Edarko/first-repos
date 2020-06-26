<?php
require_once "configDB.php";
class user {
    function __construct(){
$db= new DB();
    }
    
  
    public function register($trn_date, $name, $username, $email, $pass) {  
        $sql="Select id from users where email='$email'";  
        $get = $this->connection->prepare($sql); 
        execute($get);
        $result=num_rows() ;
        if ($result == 0) {  
            $register = mysql_query("Insert into users (trn_date, name, username, email, password) values ('$trn_date','$name','$username','$email','$pass')") or die(mysql_error());  
            return $register;  
        } else {  
            return false;  
        }  
    }  
  
      
  
    public function login($email, $pass) {  
        $sql="Select * from users where email='$email' and password='$pass'";  
        $get = $this->connection->prepare($sql); 
        execute($get);
        $result=num_rows() ; 
        if ($result == 1) {  
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $get['id'];  
            return true;  
        } else {  
            return false;  
        }  
    }  
  
  
    public function fullname($id) {  
        $result = mysql_query("Select * from users where id='$id'");  
        $row = mysql_fetch_array($result);  
        echo $row['name'];  
    }  
  
  
    public function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }  
  
      
  
    public function logout() {  
        $_SESSION['login'] = false;  
        session_destroy();  
    }  
}  
  





?>