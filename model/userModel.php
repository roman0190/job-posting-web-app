<?php
require_once('db.php');

function login($username, $password, $remember)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        while ($row = mysqli_fetch_assoc($result)) {

            $userId = $row['id'];
            $userType = $row['user_type'];
            $username = $row['username'];
        }

        if ($remember) {
            $remembering_timespan = time() + 7 * 24 * 60 * 60;
            setcookie('userId', $userId,  $remembering_timespan, "/");
            setcookie('userType', $userType,  $remembering_timespan, "/");
            setcookie('username', $username,  $remembering_timespan, "/");
            setcookie('loggedIn', true,  $remembering_timespan, "/");
            setcookie('auth', true,  $remembering_timespan, "/");
        } else {
            session_start();
            $_SESSION['userId'] = $userId;
            $_SESSION['userType'] = $userType;
            $_SESSION['username'] = $username;
            $_SESSION['loggedIn'] = true;
            $_SESSION['auth'] = true;
        }

        header("location: homePage.php");
    } else {

        return "Invalid username or password";
    }
}

function register(
    $first_name,
    $last_name,
    $username,
    $email,
    $gender,
    $dob,
    $password,
    $user_type
) {

    $con = getConnection();
    $sql = "select * from users where username='{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return "Username is already taken";
    }
    $sql = "select * from users where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return "The email is already in use";
    }

    $sql = "insert into users (
        first_name,
        last_name, 
        username,
        email,
        gender,
        dob ,
        password ,
        user_type 

        ) values (

        '$first_name',
        '$last_name',
        '$username',
        '$email',
        '$gender',
        '$dob',
        '$password',
        '$user_type'
        
        )";
    $result = mysqli_query($con, $sql);


    if ($result) {
        login($username, $password, "");
        header('location: login.php');
    } else {

        return "Database error!";
    }
}


function getUser($id)
{
    session_start();
    if ($_SESSION['username']) {
        $id = $_SESSION['user']['id'];
    }
    $con = getConnection();
    $sql = "select * from users where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'], 'type' => $user['user_type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'admin') {
            header('location: ../views/admin_home.php');
        } else {
            header('location: ../views/user_home.php');
        }
    } else {

        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}

function updateUser($user)
{


    $con = getConnection();


    $id = $user['id'];
    $username = $user['username'];
    $email = $user['email'];

    $sql = "UPDATE users SET username = '$username', email = '$email' WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteUser($id)
{

    $con = getConnection();
    $sql = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}

function getUserType($username)
{
    $con = getConnection();
    $sql = "SELECT user_type FROM users WHERE username = '{$username}'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            return $user['user_type']; // Return the user type
        } else {
            return false; // User not found
        }
    } else {
        return false; // Error in the query
    }
}
