<?php
session_start();
require_once('../model/userModel.php');
if(isset($_REQUEST['send'])){

    $email = $_REQUEST['email'];
    $_SESSION['email_check']=$email;


    $checkEmail = getEmail($email);

    if($checkEmail){

        header('location:../view/changePassword.php');
        
    } else{
        echo "Email Not Found";
    }

}

?>