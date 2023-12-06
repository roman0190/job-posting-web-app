<?php
require_once("../../model/rulesModel.php");

if(isset($_COOKIE["userId"])){
    $rules = getRules();
}
else if(isset($_SESSION["userId"])){
    $rules = getRules();
}
else{
    header('Location: ../Auth/signIn.php');
}
?>
