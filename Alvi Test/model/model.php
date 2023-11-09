<?php
function insertUser($name, $email, $username, $password, $user_type, $gender, $dob)
{
   
    include_once('db.php');

    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * from users WHERE username='{$username}'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count != 0) {
        return "username is already is in use";
    }

    $sql = "SELECT * from users WHERE email='{$email}'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count != 0) {
        return "email is already is in use";
    }





    $sql = "INSERT INTO users (name, email, username, password, user_type, gender, dob)
            VALUES ('$name', '$email', '$username', '$password', '$user_type', '$gender', '$dob')";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: ../view/signIn.php");
    } else {
        echo  mysqli_error($conn);
        mysqli_close($conn);

        return "error";
    }
}

function validateUser($username, $password)
{
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    return mysqli_num_rows($result) > 0;
}
