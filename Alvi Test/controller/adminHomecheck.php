<?php
require_once('../model/adminHomemodel.php');

if (isset($_POST['newDescription'])) {
    $newDescription = $_POST['newDescription'];

    // Update the description
    if (updateAdminDescription($newDescription)) {
        header('Location: ../view/adminHome.php'); // Redirect back to the admin home page
        exit();
    }
}

$description = "This is the admin home page. You can update this description to provide important information to your users.";
// Fetch the description
$description = getAdminDescription();
?>
