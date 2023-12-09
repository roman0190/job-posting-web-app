<?php

include_once("../../model/userModel.php");

$last_name = isset($_REQUEST['last_name']) ? $_REQUEST['last_name'] : "";
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : "";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : "";
$gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : "";
$dob = isset($_REQUEST['dob']) ? $_REQUEST['dob'] : "";
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : "";
$confirmPassword = isset($_REQUEST['confirmPassword']) ? $_REQUEST['confirmPassword'] : "";
$user_type = isset($_REQUEST['user_type']) ? $_REQUEST['user_type'] : "";
// $pfp = isset($_REQUEST['pfp']) ? $_REQUEST['pfp'] : "";


$last_nameError = "";
$usernameError = "";
$emailError = "";
$genderError = "";
$dobError = "";
$passwordError = "";
$confirmPasswordError = "";
$user_typeError = "";
$pfpError = "";





$error = "";

if (isset($_POST["submit"])) {

    
    if (!$last_name) {
        $last_nameError = "Please enter your name";
    }
    if (!$username) {
        $usernameError = "Please enter a username";
    }
    if (!$email) {
        $emailError = "Please enter your email";
    }
    if (!$gender) {
        $genderError = "Please enter your gender";
    }
    if (!$dob) {
        $dobError = "Please enter your date of birth";
    }
    if (!$password) {
        $passwordError = "Please enter password";
    }
    if ($password && strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters";
    }
    if (!$confirmPassword) {
        $confirmPasswordError = "Please enter confirmPassword";
    }
    if ($confirmPassword != $password) {
        $confirmPasswordError = "passwords did not match";
    }
    if (!$user_type) {
        $user_typeError = "Please enter user type";
    }
    // if (!$pfp){
    //     $pfp="Please enter user type";

    // }
    if (
       
        $last_name &&
        $username &&
        $email &&
        $gender &&
        $dob &&
        $password &&
        $user_type &&
        $password == $confirmPassword
    ) {
        $error = register(
            
            $last_name,
            $username,
            $email,
            $gender,
            $dob,
            $password,
            $user_type
        );
    }
}
