<!DOCTYPE html>
<html lang="en">
<head>
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
                <h1>Admin Events</h1>
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
                   
                    echo '<form method="post" action="../controller/deleteEvent.php">';
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
