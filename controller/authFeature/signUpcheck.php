<?php

include_once('../../model/db.php');
$name = "";
$email = "";
$username = "";
$password = "";
$confirm_pass = "";
$user_type = "";
$gender = "";
$date_of_birth = "";

$error_message = "";


if (isset($_REQUEST['data'])) {
  
$error_message = '';

$stringData = $_REQUEST['data'];
$data = json_decode($stringData);



    $name = $data->name;
    $email = $data->email;
    $username = $data->username;
    $password = $data->password;
    
    $user_type = $data->user_type;
    $gender = $data->gender;
    
    $date_of_birth = $data->dob;
    if ($name == '') {
        $error_message = "You must fill in your Name! <br>";
    } else if ($email == '') {
        $error_message = "You must fill in your Email! <br>";
    } else if ($username == '') {
        $error_message = "You must fill in your User Name! <br>";
    } else if ($password == '') {
        $error_message = "You must fill in your Password! <br>";
    }  else if ($gender == '') {
        $error_message = "You must fill in your Gender! <br>";
    } else if ($date_of_birth == '') {
        $error_message = "You must fill in your Date of Birth! <br>";
    }else if ($user_type == '') {
        $error_message = "You must fill in user type! <br>";
    }

    if ($name !== '' && $email !== '' && $username !== '' && $password !== '' && $gender !== '' && $date_of_birth !== ''&& $user_type !== '') {

        require('../../model/model.php'); 
      
        $res=['message'=> insertUser($name, $email, $username, $password, $user_type, $gender, $date_of_birth)];
        echo json_encode($res);
    }
}
