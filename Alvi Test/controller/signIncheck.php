<?php 
    session_start();
    require_once('db.php');
    require_once('../model/model.php');
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = signIn ($username, $password);
        if($status){
            $_SESSION['flag'] = "true";
            header('location: ../view/privacy.php');
        }else{
            echo "invaid user!";
        }
    }
?>