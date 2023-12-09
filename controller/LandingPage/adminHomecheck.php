<?php
require_once('../../model/adminHomemodel.php');
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: ../../view/Auth/login.php'); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];

if (isset($_POST['newDescription'])) {
    $newDescription = $_POST['newDescription'];
    
    
    if (updateAdminDescription($newDescription)) {
        header('Location: ../../view/LandinPage/adminHome.php'); 
        exit();
    }
}



$description = getAdminDescription();
?>
