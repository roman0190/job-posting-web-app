<?php
    require('db.php');


    function sendNotification($username, $message) {
        $con = getConnection();
    
        $sql = "INSERT INTO notification (username, message) VALUES ('$username', '$message')";
    
        if (mysqli_query($con, $sql)) {
            echo "Notification sent successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    
        mysqli_close($con);
    }
    

?>