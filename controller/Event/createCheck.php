<?php

require_once("../../model/notificationModel.php");
session_start();
   $name = "An Admin";
  $message = "Post an Event";
  $user_types = "applicant,recuritor";

  $user_type_array = explode(",", $user_types);

  foreach ($user_type_array as $user_type) {
      sendNotification($name, $message, $user_type);
  }
include('../../model/eventModel.php');

if (isset($_POST['data'])) {
    $data= json_decode($_POST['data']);
    $title = $data->title;
    $location = $data->location;
    $date = $data->date;
    $description = $data->description;
    $contact_info = $data->contact_info;

    $result = createEvent($title, $location, $date, $description, $contact_info);

    if ($result) {
       echo json_encode(['success' => "Web Tech"]);
       
    } else {
        echo json_encode(['Error' => "Error creating event."]);
       
    }
}
?>
