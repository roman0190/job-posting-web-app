<?php

include_once("../../model/userModel.php");


$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";

$usernameError = "";
$passwordError = "";

$remember = isset($_REQUEST['remember']) ? $_REQUEST['remember'] : "";



$error = "";

if (isset($_POST["submit"])) {


    if (!$username) {
        $usernameError = "Please enter a username";
    }

    if (!$password) {
        $passwordError = "Please enter password";
    }

    if (
        $username &&
        $password
    ) {
        $error = login(
            $username,
            $password,
            $remember

        );
    }
}
