<?php
require_once('db.php');



function getUser($username) {
    $con = getConnection();
    $sql = "SELECT name FROM users WHERE username !='$username'";
    $result = mysqli_query($con, $sql);

    if ($result === false) {
        mysqli_close($con);
        return null;
    }

    $userNames = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $userNames[] = $row;
    }

    mysqli_free_result($result);
    mysqli_close($con);

    return $userNames;
}

function insertText($sender, $message, $receiver) {
    $con = getConnection();

 
    $timestamp = date('Y-m-d H:i:s');
    $sql = "INSERT INTO chat (sender, receiver, text, time) VALUES ('$sender', '$receiver', '$message', '$timestamp')";

    if (mysqli_query($con, $sql)) {
        echo "Message inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}

function getAllmessges($sender,$receiver){
    $con = getConnection();

    $sql = "SELECT * from  chat Where (receiver='$receiver' AND sender ='$sender')OR(receiver='$sender' AND sender ='$receiver')";

    $result=mysqli_query($con, $sql);

    if ($result) {

        $Messages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $Messages[] = $row;
        }
    
        mysqli_free_result($result);
        mysqli_close($con);
    
        return $Messages;

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}


?>