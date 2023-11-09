<?php

include_once('../model/db.php');




$name = "";
$email = "";
$username = "";
$password = "";
$confirm_pass = "";
$user_type = "";
$gender = "";
$date_of_birth = "";

$error_message = "";

if (isset($_REQUEST['submit'])) {

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_pass = $_REQUEST['confirm_pass'];
    $user_type = $_REQUEST['user_type'];


    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $gender = '';
    }

    $date_of_birth = $_REQUEST['dob'];
    if ($name == '') {
        $error_message = "You must fill in your Name! <br>";
    } else if ($email == '') {
        $error_message = "You must fill in your Email! <br>";
    } else if ($username == '') {
        $error_message = "You must fill in your User Name! <br>";
    } else if ($password == '') {
        $error_message = "You must fill in your Password! <br>";
    } else if ($confirm_pass == '' || $confirm_pass !== $password) {
        $error_message = "Your password doesn't match! <br>";
    } else if ($gender == '') {
        $error_message = "You must fill in your Gender! <br>";
    } else if ($date_of_birth == '') {
        $error_message = "You must fill in your Date of Birth! <br>";
    }

    if ($name !== '' && $email !== '' && $username !== '' && $password !== '' && $confirm_pass !== '' && $confirm_pass == $password && $gender !== '' && $date_of_birth !== '') {

        require('../model/model.php'); /
        $error_message = insertUser($name, $email, $username, $password, $user_type, $gender, $date_of_birth);
    }
}
