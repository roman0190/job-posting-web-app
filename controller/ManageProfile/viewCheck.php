<?php
require_once("../../model/profileModel.php");

session_start();

function getUserFunc($id){
    return viewProfile($id);
}

if(isset($_COOKIE["userId"])){
    $user=getUserFunc($_COOKIE["userId"]);
}
else if(isset($_SESSION["userId"])){
    $user=getUserFunc($_SESSION["userId"]);
}
else{
    header('Location: ../Auth/login.php');
}

?>