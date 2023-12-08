<!DOCTYPE html>
<html>
<head>
    <title>User Events</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/Event/userEvent.css">
</head>
<body>
    <h1>Welcome to our Events</h1>
    <?php
    include ('../../model/eventModel.php');

    $events = getAllEvents();

    foreach ($events as $row) {
        echo '<div class="event">';
        echo '<h2>' . $row['title'] . '</h2>';
        echo '<p>Date: ' . $row['date'] . '</p>';
        echo '<p>Location: ' . $row['location'] . '</p>';
        echo '<p>Description: ' . $row['description'] . '</p>';
        echo '<p>Contact Information: ' . $row['contact_info'] . '</p>';
        echo '<button class="interested-button" data-event-id="' . $row['id'] . '">Interested</button>';
        echo '</div>';
    }
    ?>
    <h5 align="center">  
    <a href="../dashboard/commonDashboard.php">Back to Dashboard</a>
    </h5>
    
</body>
</html>
