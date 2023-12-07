<?php
session_start();
if (isset($_SESSION['userInfo']) || isset($_COOKIE['userInfo']) ) {

   
 
} else {
    header('location: ../Auth/login.php');
}
?>