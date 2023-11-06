<?php

include_once('../model/db.php'); 

if (isset($_POST['submit'])) {
    require('../model/model.php'); // Include the model.php file for database connection

    $error_message = '';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirm_pass'];
    $user_type = $_POST['userType'];

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }

    $date_of_birth = $_POST['dob'];

    // Validate user input
    if (empty($name)) {
        $error_message .= "You must fill in your Name! <br>";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
        // Database insertion
        if (insertUser($name, $email, $username, $password, $user_type, $gender, $date_of_birth)) {
            header('Location: ../view/signIn.php'); // Redirect to the sign-in page after successful registration
            exit();
        } else {
            $error_message = "Error occurred while registering.";
        }
    }
}
?>