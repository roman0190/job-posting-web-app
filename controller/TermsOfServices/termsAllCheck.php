<?php
require_once("../../model/termsModel.php");
session_start();
if(isset($_COOKIE["userId"])){
    $terms = getTerms();
}
else if(isset($_SESSION["userId"])){
    $terms = getTerms();
}
else{
    header('Location: ../Auth/login.php');
}
?>
