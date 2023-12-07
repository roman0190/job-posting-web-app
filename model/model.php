<?php
function insertUser($name, $email, $username, $password, $user_type, $gender, $dob)
{
   
    include_once('db.php');

    $con = getConnection();

    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * from users WHERE username='{$username}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count != 0) {
        return "username is already is in use";
    }

    $sql = "SELECT * from users WHERE email='{$email}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count != 0) {
        return "email is already is in use";
    }





    $sql = "INSERT INTO users (name, email, username, password, user_type, gender, dob)
            VALUES ('$name', '$email', '$username', '$password', '$user_type', '$gender', '$dob')";
    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        return "successfully inserted";
    } else {
        echo  mysqli_error($con);
        mysqli_close($con);

        return "error";
    }
}



function validateUser($username, $password, $remember)
{
    $con = getConnection();
    $sql = "select * from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        while ($row = mysqli_fetch_assoc($result)) {
            $userInfo = $row;
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
            setcookie('userInfo', json_encode($userInfo),  $remembering_timespan, "/");
        } else {
            session_start();
            $_SESSION['userId'] = $userId;
            $_SESSION['userType'] = $userType;
            $_SESSION['username'] = $username;
            $_SESSION['loggedIn'] = true;
            $_SESSION['auth'] = true;
            $_SESSION['userInfo'] = json_encode($userInfo);
        }
          return json_encode(["success"=>true]);
    } else {
        return json_encode(["error"=>"Invalid username or password"]);
        
    }
}
