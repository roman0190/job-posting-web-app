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

        if (userValidation($username, $password)) {
            $con = getConnection();
            $sql = "select * from users where username = '$username'";
            $user = [];
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($result);
                $user = $row;
            } else {
                echo "Invalid User";
                return false;
            }

            if ($remember_me) {
                setcookie('userId', $user['id'], time() + 86400 * 30, '/');
            } else {
                session_start();
                $_SESSION['userId'] = $user['id'];
            }

            header('Location:../view/rules.php');
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}