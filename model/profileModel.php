<?php
require("db.php");

function viewProfile($userId)
{
    $conn = getConnection();
    $sql = "SELECT username, name, email, gender, dob, password, pfp FROM users WHERE id = '$userId'";
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

function getUser($username){
    $conn = getConnection();
    $sql = "SELECT * from users where username='{$username}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Invalid User";
        return false;
    }
}

function updateUser($user){
    $conn = getConnection();

    $username = $user['username'];
    $name = $user['name'];
    $email = $user['email'];
    $gender = $user['gender'];
    $dob = $user['dob'];

    $sql = "UPDATE users SET name = '$name', email = '$email', gender = '$gender', dob = '$dob' WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);


    if($result){
        $dataToSend=["success"=>true];
        $jsonData=json_encode($dataToSend);

        return $jsonData;
    } else {
        return "error";
    }
}

function changePass($user)
{
    $conn = getConnection();

    $username = $user['username'];
    $newPassword = $user['newPassword'];

    $sql = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $dataToSend = ["success" => true];
        $jsonData = json_encode($dataToSend);

        mysqli_close($conn);
        return $jsonData;
    } else {
        mysqli_close($conn);
        return "error";
    }
}

?>

