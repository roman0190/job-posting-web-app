<?php
require_once('db.php');

function insertUser($name, $email, $username, $password, $user_type, $gender, $dob)
{
    $conn = getConnection();
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

function userValidation($username, $password)
{
    $conn = getConnection();
    $sql = "SELECT * FROM users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function getUserById($username)
{
    $conn = getConnection();
    $sql = "SELECT name, email, gender, dob, pfp FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $user;
    } else {
        mysqli_close($conn);
        return null;
    }
}

function checkIfUserIsAdmin($username)
{
    $conn = getConnection();
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "SELECT user_type FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $userType = $row['user_type'];

        // Check if the user type indicates admin (you may have a different admin role or permission mechanism)
        if ($userType === 'admin') {
            mysqli_close($conn);
            return true;
        }
    }

     mysqli_close($conn);
     return false;
 }

 ?>