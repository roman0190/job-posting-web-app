<?php 
// require("../model/profileModel.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get the form data
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $gender = $_POST["gender"];
//     $dob = $_POST["dob"];

//     $uploadsDirectory = 'uploads/';
//     $profilePicture = $_FILES['profile-picture'];
//     $uploadedFile = uploadProfilePicture($profilePicture, $uploadsDirectory);

//     $username = "mitti";

//     $updatedUser = editProfile($username, $name, $email, $gender, $dob, $uploadedFile);

//     if ($updatedUser) {
//         header("Location: viewProfile.php");
//         exit();
//     } else {
//         echo "Failed to update profile.";
//     }
// }

// function uploadProfilePicture($file, $uploadsDirectory)
// {
//     // Implement your file upload logic here
//     // Return the path to the uploaded file if successful, or false on failure
//     // For simplicity, this function is not implemented in this example
//     // You can refer to the previous response for a sample upload function
//     $src = $_FILES['myfile']['tmp_name'];
//     $des = 'upload/'.$_FILES['myfile']['name'];

//     if(move_uploaded_file($src, $des)){
//         echo "Success";
//     }else{
//         echo "Error!";
//     }
// }
?>

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
