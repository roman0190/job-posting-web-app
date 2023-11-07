<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}

// Redirect to the login page or any other page
header('Location: signIn.php'); // Change 'login.php' to the desired destination
exit();
?>
