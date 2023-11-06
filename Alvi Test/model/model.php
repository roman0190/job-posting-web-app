<?php
function insertUser($name, $email, $username, $password, $user_type, $gender, $dob) {
    // Include your database connection details from db.php
    include_once('db.php');

    $conn = getConnection();

    // Check if the database connection is established
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
     

    // Perform database insert
    $sql = "INSERT INTO users (name, email, username, password, user_type, gender, dob)
            VALUES ('$name', '$email', '$username', '$password', '$user_type', '$gender', '$dob')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        die("Error: " . mysqli_error($conn));
    }
}

?>
