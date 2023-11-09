
<?php
function getEvents() {
    $conn = getConnection();
    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn, $sql);
    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }
    return $events;
}

function updateEvent($eventId, $title, $location, $date, $description, $contact_info) {
    $conn = getConnection();
    $sql = "UPDATE events SET title='$title', location='$location', date='$date', description='$description', contact_info='$contact_info' WHERE id=$eventId";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
      
        return mysqli_error($conn);
    }
}


?>
