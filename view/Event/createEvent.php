<?php
include ('../../controller/Event/createCheck.php');
?>
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
                 <h1>Create New Event</h1>
                 
                    <form method="post" action="">
                       
                        <input type="text" name="title" placeholder="Title" required><br><br>
                        <input type="text" name="location" placeholder="Location" required><br><br>
                        <input type="date" name="date" required><br><br>
                        <textarea name="description" placeholder="Description" required></textarea><br><br>
                        <textarea name="contact_info" placeholder="Contact Information" required></textarea><br><br>
                        <input type="submit" name="submit" value="Create Event"><br><br>
                    </form>

                    <h4 align="center">
                    <a href="adminEvent.php">Back to Admin Event Page</a><br><br>
                
                    </h4>
            </td>
        </tr>

        <!-- ... (other HTML code) ... -->

    </table>
</body>
</html>
