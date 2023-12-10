<?php
require_once("../../model/saveJobModel.php");

session_start();

if(isset($_COOKIE["userId"])){
    $userId = $_COOKIE["userId"];
}
else if(isset($_SESSION["userId"])){
    $userId = $_SESSION["userId"];
}
else{
    header('Location: ../Auth/login.php');
}

$jobs =  viewSavedJobs($userId);
?>