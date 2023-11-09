<?php
require_once('../model/adminHomemodel.php');

if (isset($_POST['newDescription'])) {
    $newDescription = $_POST['newDescription'];

   
    if (updateAdminDescription($newDescription)) {
        header('Location: ../view/adminHome.php'); 
        exit();
    }
}

$description = "This is the admin home page. You can update this description to provide important information to your users.";

$description = getAdminDescription();
?>
