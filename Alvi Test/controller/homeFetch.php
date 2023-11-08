<?php
// Include necessary files and functions (adminHomemodel.php)

$description = getSiteDescription(); // Fetch the description

// Start the session
session_start();

// Store the description in a session variable
$_SESSION['site_description'] = $description;
?>
