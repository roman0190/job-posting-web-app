<!DOCTYPE html>
<html lang="en">
<head>
    <title>MARZ JOB SITE - Your Job Search Partner</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/Event/adminEvent.css">
</head>
</head>
<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        
        <tr>
            <td>
                <h1>Admin Events</h1>
                <?php
                include('../../model/eventModel.php');

                $events = getAllEvents();

                foreach ($events as $row) {
                    echo '<div class="event">';
                    echo '<h2>' . $row['title'] . '</h2>';
                    echo '<p>Date: ' . $row['date'] . '</p>';
                    echo '<p>Location: ' . $row['location'] . '</p>';
                    echo '<p>Description: ' . $row['description'] . '</p>';
                    echo '<p>Contact Information: ' . $row['contact_info'] . '</p>';
                   
                    echo '<form method="post" action="../../controller/Event/deleteEvent.php">';
                    echo '<input type="hidden" name="event_id" value="' . $row['id'] . '">';
                    echo '<input type="submit" name="delete" value="Delete">';
                    echo '</form>';
                  
                    echo '<a href="editEvent.php?event_id=' . $row['id'] . '"><button>Edit</button></a>';
                    
                    echo '</div>';
                }
                ?>        
                <h5 align="center">
                    <a href="createEvent.php">Create New Event</a>
                </h5>
            </td>
        </tr>


    </table>
</body>
</html>
