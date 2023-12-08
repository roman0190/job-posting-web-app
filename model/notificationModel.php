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
    
        $sql = "SELECT id, username, message FROM notification WHERE user_type = '$user_type' ORDER BY notification_time DESC";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $notifications = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $notifications[] = [
                    'id' =>$row['id'],
                    'username' => $row['username'],
                    'message' => $row['message']
                ];
            }
            return $notifications;
        } else {
            return "No Notifications Found";
        }

    }
    
    function clearNotification($notificationId) {
        $con = getConnection();
        
      
        if (!is_numeric($notificationId)) {
            return ["error" => "Invalid notification ID"];
        }
    
        $sql = "DELETE FROM notification WHERE id = $notificationId";
    
        if (mysqli_query($con, $sql)) {
            return ["success" => "Notification cleared successfully"];
        } else {
            return ["error" => "Failed to clear notification"];
        }
    
    }


?>