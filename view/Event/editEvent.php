<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARZ JOB SITE - Your Job Search Partner</title>
</head>

<body>
    <table width="100%" border="1" cellspacing="0" cellpadding="20">
        <tr>
            <th colspan="2">
                <h2 align="center">
                    <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="dashboard.php">Dashboard</a> |
                    <a href="logOut.php">Logout</a>
                </h5>
            </th>
        </tr>

        <tr>
            <td>
                <h1>Edit Event</h1>
                <?php
                include('../../model/db.php');
                include('../../controller/Event/editCheck.php');
                $con = getConnection();

                if (isset($_GET['event_id']) && is_numeric($_GET['event_id'])) {
                    $event_id = $_GET['event_id'];
                   
                    $sql = "SELECT * FROM events WHERE id = $event_id";
                    $result = mysqli_query($con, $sql);
                    $event = mysqli_fetch_assoc($result);
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

        <tr>
            <td>
                <footer align="center">
                    <p>&copy; 2023 MARZ JOB SITE. All rights reserved.</p>
                </footer>
            </td>
        </tr>
    </table>
</body>

</html>
