<!DOCTYPE html>
<html>
<head>
    <title>User Events</title>
</head>
<body>
    <h1>Welcome to our Events</h1>
    <?php
   
    include ('../model/db.php');
    $conn = getConnection();

    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
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
</body>
</html>
