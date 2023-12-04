<?php

   include_once('../model/db.php'); 
   include_once('../model/model.php');
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);
    

    if (empty($username) || empty($password)) {
        $error_message = "Both username and password are required.";
    } else {
      
        require_once('../model/model.php');

        if (validateUser($username, $password)) {
        
            if ($remember_me) {
                
                setcookie('username', $username, time() + 86400 * 30, '/');
                setcookie('password', $password, time() + 86400 * 30, '/');
            }
            else{
                session_start();
                $_SESSION['username'] = $username;
                header('Location: ../view/adminHome.php'); // Redirect to dashboard after successful login
                exit();
            }

            header('Location:../view/adminHome.php');
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}
?>
