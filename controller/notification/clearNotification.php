<?php
require_once("../../model/notificationModel.php");

if (isset($_POST['notificationId'])) {
    $notificationId = $_POST['notificationId'];

    $result = clearNotification($notificationId) ;

    echo json_encode($result);
} else {
    echo json_encode(["error" => "Notification ID not set"]);
}

?>