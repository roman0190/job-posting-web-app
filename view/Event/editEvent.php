<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARZ JOB SITE - Your Job Search Partner</title>
</head>

<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        <!-- ... (other HTML code) ... -->

        <tr>
            <td>
                <h1>Edit Event</h1>
                <?php
                include('../../model/eventModel.php');
                
                if (isset($_GET['event_id']) && is_numeric($_GET['event_id'])) {
                    $event_id = $_GET['event_id'];
                   
                    $event = getEventById($event_id);

                    if ($event) {
                ?>
                        <form method="post" action="../../controller/Event/editCheck.php">
                            <input type="hidden" name="eventId" value="<?php echo $event_id; ?>">
                            <label>Title:</label>
                            <input type="text" name="title" value="<?php echo $event['title']; ?>"><br>
                            <label>Date:</label>
                            <input type="text" name="date" value="<?php echo $event['date']; ?>"><br>
                            <label>Location:</label>
                            <input type="text" name="location" value="<?php echo $event['location']; ?>"><br>
                            <label>Description:</label>
                            <textarea name="description"><?php echo $event['description']; ?></textarea><br>
                            <label>Contact Information:</label>
                            <input type="text" name="contact_info" value="<?php echo $event['contact_info']; ?>"><br>
                            <input type="submit" name="submit" value="Submit">
                        </form>
                        <br><br>
                        <h4 align="center">
                            <a href="adminEvent.php">Back to Admin Event Page</a><br><br>
                        </h4>
                <?php
                    } else {
                        echo 'Event not found.';
                    }
                } else {
                    echo 'Invalid event ID.';
                }
                ?>
            </td>
        </tr>

        <!-- ... (other HTML code) ... -->

    </table>
</body>

</html>
