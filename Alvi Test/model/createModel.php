
<?php
function createEvent($title, $location, $date, $description, $contact_info) {
    $conn = getConnection();
    $sql = "INSERT INTO events (title, location, date, description, contact_info) VALUES ('$title', '$location', '$date', '$description', '$contact_info')";
    return mysqli_query($conn, $sql);
}



?>
