<?php
  require_once("../../model/profileModel.php");

  function getUserFunc($id){
    return viewProfile($id);
  }

  $user="";

  if(isset($_COOKIE["userId"])){
    $user=getUserFunc($_COOKIE["userId"]);
  }
  else if(isset($_SESSION["userId"])){
    $user=getUserFunc($_SESSION["userId"]);
  }
  else{
    header('Location: ../Auth/signIn.php');
  }

  if(isset($_REQUEST['data'])){

    $data = $_REQUEST['data'];
    $parsedData = json_decode($data);

  //js theke aikhane request ashche thru ajax 
    $userData = [
        'username' => $user["username"],
        'name' => $parsedData->name , 
        'email' => $parsedData->email, 
        "gender" => $parsedData->gender,
        "dob" => $parsedData->dob
    ];

    //echo "name: $name, email: $email, gender: $gender, dob: $dob";

    echo(updateUser($userData));
  }

?>
