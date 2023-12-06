
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
            <td>
                 <h1>Create New Event</h1>
                 
                    
                       
                    <form method="post" action="">
                        <input type="text" id="title" name="title" placeholder="Title" required><br><br>
                        <input type="text" id="location" name="location" placeholder="Location" required><br><br>
                        <input type="date" id="date" name="date" required><br><br>
                        <textarea id="description" name="description" placeholder="Description" required></textarea><br><br>
                        <textarea id="contact_info" name="contact_info" placeholder="Contact Information" required></textarea><br><br>
                        <input type="button" name="submit" value="Create Event" onclick="create()"/><br><br>
                    </form>

                    

                    <h4 align="center">
                    <a href="adminEvent.php">Back to Admin Event Page</a><br><br>
                
                    </h4>
            </td>
        </tr>
 </table>

    <script src="../../assets/JS/Event/createEvent.js">  </script>
</body>
</html>
