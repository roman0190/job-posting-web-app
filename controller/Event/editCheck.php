<?php
include('../../model/eventModel.php');


    if (isset($_POST['data'])) {
        $data= json_decode($_POST['data']);
        $event_id = $data ->event_id;
        $title = $data->title;
        $location = $data->location;
        $date = $data->date;
        $description = $data->description;
        $contact_info = $data->contact_info;
    $result = updateEvent($event_id, $title, $location, $date, $description, $contact_info);

    if ($result) {
        echo json_encode(['success' => "Web Tech"]);
     } else {
         echo json_encode(['Error' => "Error edit event."]);
        
     }
}
?>
