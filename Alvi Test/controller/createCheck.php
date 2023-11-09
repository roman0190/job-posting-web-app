
<?php
if (isset($_POST['submit'])) {
    include ('../model/db.php');
    include ('../model/createModel.php');
    
 
    $title = $_POST['title'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $contact_info = $_POST['contact_info'];
    
    if (createEvent($title, $location, $date, $description, $contact_info)) {
        header('Location: adminEvent.php');
    } else {
        echo 'Failed to create the event.';
    }
}


?>
