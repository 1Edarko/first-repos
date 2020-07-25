<!-- <?php
session_start();
include( 'db.php' );

class User extends Db {

    public function Login( $email, $password ) {
        // global $con;
        $password=sha1($password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        // $sql = "SELECT * FROM users WHERE email='$email' && password='$password'";
        // $sql = "SELECT * FROM users WHERE email='$email'";
        $query = $this->connect()->prepare( $sql );
        $query->execute();
        $fetch = $query->fetch();
        $result = $query->rowCount();
       var_dump($fetch) ;
       var_dump($sql);
        if ( $result ) {
            $_SESSION['user_session'] = array(
                'email' => $fetch['email'],
                'login' => true,
                'username' => $fetch['username'],
                'id' => $fetch['id']

            );
           
            // $_SESSION['email'] = $result['email'];
            // $_SESSION['login'] = true;
            // $_SESSION['username'] = $result['username'];
            return true;
        } else {
            return false;
        }
    }

        public function Register( $username, $email, $password ) {
            // global $con;
            $password=sha1($password);
            $q="INSERT INTO users(username, email, password) values('$username','$email','$password')";
            $qr = $this->connect()->query($q);
            $rows= $qr->rowCount();
            

            

            // // echo $password;
            // sleep(5);
            return $rows;


// return false;
        

    }
    public function User_exist($email){
            $sql="SELECT * FROM users WHERE email='$email'";
            $res = $this->connect()->prepare($sql);
            $res->execute();
            $row= $res->rowCount();
            return $row;

    }

}

?> -->