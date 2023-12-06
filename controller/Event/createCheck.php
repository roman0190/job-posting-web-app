<?php
include('../../model/eventModel.php');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $contact_info = $_POST['contact_info'];

    $result = createEvent($title, $location, $date, $description, $contact_info);

    if ($result) {
        header("Location: ../../view/Event/adminEvent.php");
    } else {
        echo "Error creating event.";
    }
}
?>
