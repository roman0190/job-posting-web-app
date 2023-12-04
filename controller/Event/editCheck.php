
<?php
if (isset($_POST['submit'])) {
    include ('../../model/db.php');
    include ('../../model/Event/editModel.php');
  
    $eventId = $_POST['eventId'];
    $title = $_POST['title'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $contact_info = $_POST['contact_info'];
    
    if (updateEvent($eventId, $title, $location, $date, $description, $contact_info)) {
        header('Location:  ../../view/Event/adminEvent.php');
    } else {
        echo 'Failed to update the event.';
    }
}
?>
