<?php

include_once('../../model/db.php'); 

if (isset($_POST['submit'])) {
    require('../../model/model.php');

    $error_message = '';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    $user_type = $_POST['user_type'];

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }

    $date_of_birth = $_POST['dob'];

    if (empty($name)) {
        $error_message .= "You must fill in your Name! <br>";
    }

    if (empty($email) || (strpos($email, '@') === false) || (strpos($email, '.') === false)) {
        $error_message .= "You must provide a valid Email! <br>";
    }    

    if (empty($username)) {
        $error_message .= "You must fill in your User Name! <br>";
    }

    if (empty($password)) {
        $error_message .= "You must fill in your Password! <br>";
    }

    if ($password !== $confirm_pass) {
        $error_message .= "Your password doesn't match! <br>";
    }

    if (empty($gender)) {
        $error_message .= "You must select your Gender! <br>";
    }

    if (empty($date_of_birth)) {
        $error_message .= "You must provide your Date of Birth! <br>";
    }

    if (empty($error_message)) {
        if (insertUser($name, $email, $username, $password, $user_type, $gender, $date_of_birth)) {
            header('Location: ../view/signIn.php');
            exit();
        } else {
            $error_message = "Error occurred while registering.";
        }
    }
}
?>