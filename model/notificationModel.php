<?php
    require('db.php');
    function sendNotification($username, $message, $user_type) {
        $con = getConnection();
    
        $sql = "INSERT INTO notification (username, message, user_type) VALUES ('$username', '$message', '$user_type')";
    
        if (mysqli_query($con, $sql)) {
            // Notification sent successfully
        } else {
            echo "Error: " . mysqli_error($con);
        }
    
    }
    
     
    function getNotification($user_type) {
        $con = getConnection();
    
        $sql = "SELECT * FROM notification WHERE user_type = '$user_type'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $notifications = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $notifications[] = $row['message'];
            }
            return $notifications;
        } else {
            return "No Notifications Found";
        }

    }



?>