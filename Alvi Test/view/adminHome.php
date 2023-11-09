<?php
// Include necessary files and functions
include_once("../controller/adminHomecheck.php");
include_once("../model/adminHomemodel.php");


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
            <p align="center">
                  
                    <a href="terms.php">Terms of Services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="privacy.php">Privacy Policy</a>
                </p>
                
                <header align="center">
                    <h1>Welcome, Admin</h1>
                </header>
    
               
                <section>
                    <h2>Description</h2>
                    <?php
                    // Display the description from a database or text file
                  
                    echo "<p>$description</p>";
                    ?>
        
                    <form action="" method="post">
                        <label for="newDescription">Update Description:</label>
                        <textarea id="newDescription" name="newDescription" rows="4" cols="50"></textarea>
                        <br>
                        <input type="submit" value="Save">
                    </form>
                </section>
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