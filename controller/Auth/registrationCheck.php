<?php

include_once("../../model/userModel.php");


if (isset($_POST["data"])) {
    $error = "";
    $data = json_decode($_POST["data"], true);

    if (!$data['name']) {
        $error = "Please enter your name";
    }
    if (!$data['username']) {
        $error = "Please enter your username";
    }
    if (!$data['email']) {
        $error = "Please enter a valid email";
    }
    if (!$data['password']) {
        $error = "Please enter your password";
    }
    if (!$data['gender']) {
        $error = "Please enter your gender";
    }
    if (!$data['userType']) {
        $error = "Please enter your type of user";
    }
    if (!$data['dob']) {
        $error = "Please enter date of birth";
    }

    // if (!$pfp){
    //     $pfp="Please enter user type";

    // }
    if (!$error) {
        $error = register(
            $data['name'],
            $data['username'],
            $data['email'],
            $data['gender'],
            $data['dob'],
            $data['password'],
            $data['userType']
        );
    }
}
