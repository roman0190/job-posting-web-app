<?php
include('../../model/db.php');

if (isset($_POST['delete'])) {
    $event_id = $_POST['event_id'];
    $con = getConnection();
    $sql = "DELETE FROM events WHERE id = $event_id";
    if (mysqli_query($con, $sql)) {
    
        header('Location: ../../view/Event/adminEvent.php');
    } else {
        echo 'Error: ' . mysqli_error($con);
    }
} else {
    echo 'Invalid request.';
}
