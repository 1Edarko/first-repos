<?php
include( 'check.php' );
$check = new User();

if ( isset( $_POST['Lg'] ) ) {
    $email = $_POST['email'];
    // if ( empty( $_POST['email'] ) ) {
    //     $errors[] = 'Email Field Required';
    // }
    $password = $_POST['password'];
    // print_r($_POST);
    $users = $check->Login( $email, $password );
    if ( $users) {
        header( 'location:./welcome.php' );
    } else {
        $errors[] = "Email Or Password Dosn't Much";
    }
}
if ( isset( $_POST['Rg'] ) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['password_confirm'];
    $username = $_POST['username'];
    $exist = $check->User_exist( $email );
    if ( $exist ) {
        $errors[] = 'Email Already Exists Click Sign in Below !';
    } else {
        if ( $password !== $confirm_pass ) {
            $errors[] = 'Password Doesnt match';
        } else {
            $reg = $check-> Register( $username, $email, $password );
            if ( $reg ) {
                $messages[] = 'Registeration SuccefuL!';
            } else {
                $errors[] = 'Registeration Failed';
            }
        }
    }

}

?>