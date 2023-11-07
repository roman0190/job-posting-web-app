<?php

   include_once('../model/db.php'); 
   include_once('../model/model.php'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    // Validate username and password (add your validation logic here)
    if (empty($username) || empty($password)) {
        $error_message = "Both username and password are required.";
    } else {
        // Include the database connection and user validation from the model
        require_once('../model/model.php');

        // Check the user's credentials in the model
        if (validateUser($username, $password)) {
            // Successful sign-in
            if ($remember_me) {
                // If "Remember Me" is checked, set cookies
                setcookie('username', $username, time() + 86400 * 30, '/');
                setcookie('password', $password, time() + 86400 * 30, '/');
            }

            // Redirect to the "privacy.php" page
            header('Location:../view/dashboard.php');
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}
?>
