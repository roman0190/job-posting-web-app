<?php
include('../model/db.php');

if (isset($_POST['delete'])) {
    $event_id = $_POST['event_id'];
    $conn = getConnection();
    $sql = "DELETE FROM events WHERE id = $event_id";
    if (mysqli_query($conn, $sql)) {
    
        header('Location: ../view/adminEvent.php');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request.';
}
