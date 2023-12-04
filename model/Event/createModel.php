
<?php
function createEvent($title, $location, $date, $description, $contact_info) {
    $con = getConnection();
    $sql = "INSERT INTO events (title, location, date, description, contact_info) VALUES ('$title', '$location', '$date', '$description', '$contact_info')";
    return mysqli_query($con, $sql);
}



?>
