<?php
require_once("../../model/profileModel.php");

function getUserFunc($id)
{
    return viewProfile($id);
}

$user = "";

if (isset($_COOKIE["userId"])) {
    $user = getUserFunc($_COOKIE["userId"]);
} 
else if (isset($_SESSION["userId"])) {
    $user = getUserFunc($_SESSION["userId"]);
} 
else {
    header('Location: ../Auth/signIn.php');
}

if (isset($_REQUEST['data'])) {
    $data = $_REQUEST['data'];
    $parsedData = json_decode($data);

    $oldPassword = $parsedData->oldPassword;
    $storedPassword = $user["password"];

    if ($oldPassword !== $storedPassword) {
        echo json_encode(array('success' => false, 'message' => 'Incorrect old password'));
        exit;
    }

    $newPassword = $parsedData->newPassword;
    $confirmPassword = $parsedData->confirmPassword;

    if ($newPassword !== $confirmPassword) {
        echo json_encode(array('success' => false, 'message' => 'New password and confirm password do not match'));
        exit;
    }

    $userData = [
        'username' => $user["username"],
        'newPassword' => $newPassword
    ];

    $success = changePass($userData);

    echo json_encode(array('success' => $success, 'message' => ($success ? 'Password updated successfully' : 'Failed to update password')));
    exit;
}
?>
