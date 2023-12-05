<?php
include_once('db.php');

function getAllEvents() {
    $con = getConnection();
    $sql = "SELECT * FROM events";
    $result = mysqli_query($con, $sql);

    $events = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }

    return $events;
}

function createEvent($title, $location, $date, $description, $contact_info) {
    $con = getConnection();
    $sql = "INSERT INTO events (title, location, date, description, contact_info) 
            VALUES ('$title', '$location', '$date', '$description', '$contact_info')";

    return mysqli_query($con, $sql);
}

function updateEvent($eventId, $title, $location, $date, $description, $contact_info) {
    $con = getConnection();
    $sql = "UPDATE events SET title='$title', location='$location', date='$date', 
            description='$description', contact_info='$contact_info' WHERE id=$eventId";

    return mysqli_query($con, $sql);
}

function getEventById($eventId) {
    $con = getConnection();
    $sql = "SELECT * FROM events WHERE id = $eventId";
    $result = mysqli_query($con, $sql);

    return mysqli_fetch_assoc($result);
}
?>
