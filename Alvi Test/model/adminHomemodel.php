<?php
require('db.php'); // Include the existing db.php to establish a database connection

function getAdminDescription() {
    $conn = getConnection(); // Use the getConnection function from db.php

    // Check the database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Fetch the description
    $sql = "SELECT description FROM description_admin "; // Replace 'id' with your primary key
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row['description'];
    } else {
        mysqli_close($conn);
        return "Description not found";
    }
}

function updateAdminDescription($newDescription) {
    $conn = getConnection(); // Use the getConnection function from db.php

    // Check the database connection
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Update the description
    $sql = "UPDATE description_admin SET description = '$newDescription'"; // Replace 'id' with your primary key
    $result = mysqli_query($conn, $sql);

    if ($result) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

function getSiteDescription() {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT description FROM description_admin WHERE id = 1"; // Replace 'id' with your primary key
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row['description'];
    } else {
        mysqli_close($conn);
        return "Description not found";
    }
}

?>
