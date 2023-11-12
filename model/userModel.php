<?php
require_once('db.php');

function login($username, $password, $remember)
{
    $con = getConnection();
    $sql = "select id, user_type from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        while ($row = mysqli_fetch_assoc($result)) {
            $userId = $row['id'];
            $userType = $row['user_type'];
        }

        if ($remember) {
            $remembering_timespan = time() + 7 * 24 * 60 * 60;
            setcookie('userId', $userId,  $remembering_timespan);
            setcookie('userType', $userType,  $remembering_timespan);
            setcookie('auth', true,  $remembering_timespan);
        } else {
            session_start();
            $_SESSION['userId'] = $userId;
            $_SESSION['userType'] = $userType;
            $_SESSION['auth'] = "true";
        }

        if ($userType == 'admin') {
            header('location: admin_home.php');
        } elseif ($userType == 'recruiter') {
            header('location: recruiter_home.php');
        } else {
            header('location: applicant_home.php');
        }
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
$arr1 = [1, 2, 3];
$session = [];
$session[0] = "abc";
$session[1] = 23;
$session[2] = 143;
$session[2] = $arr1;

function getUser($id)
{
    session_start();
    if (isset($_SESSION['auth']) && $_SESSION['user']) {
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
}

function deleteUser($id)
{
}
