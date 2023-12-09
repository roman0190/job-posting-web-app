<?php

include_once("../../model/userModel.php");


if (isset($_POST["data"])) {
    $error = "";
    $data = json_decode($_POST["data"], true);

    if (!$data['name']) {
        $error .= "Please enter your name<br>";
    }
    if (!$data['username']) {
        $error .= "Please enter your username<br>";
    }
    if (!$data['email']) {
        $error .= "Please enter a valid email<br>";
    }
    if (!$data['password']) {
        $error .= "Please enter your password<br>";
    }
    if (!$data['gender']) {
        $error .= "Please enter your gender<br>";
    }
    if (!$data['userType']) {
        $error .= "Please enter your type of user<br>";
    }
    if (!$data['dob']) {
        $error .= "Please enter date of birth<br>";
    }

    // if (!$pfp){
    //     $pfp="Please enter user type";

    // }
    if (!$error) {
        echo json_encode(register(
            $data['name'],

            $data['username'],
            $data['email'],
            $data['gender'],
            $data['dob'],
            $data['password'],
            $data['userType']
        ));
    } else echo json_encode(['error' => $error]);
}
