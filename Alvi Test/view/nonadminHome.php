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
               
            </th>
        </tr>
        <tr>
            <td>
                <p align="center">
                    <a href="signUp.php">Signup</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="signIn.php">Signin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="terms.php">Terms of Services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="privacy.php">Privacy Policy</a>
                </p>
                
                <h2 align="center">Welcome to MARZ JOB SITE</h2>
                <h2>Description</h2>
                   <p><?php echo $description; ?></p>
               
             
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
