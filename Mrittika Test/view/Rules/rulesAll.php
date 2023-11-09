<?php
include_once("../../controller/rulesCheck.php");
include_once("../../model/rulesModel.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Rules and Regulations Page</title>
    <style>
        table {width: 900px; height: 400px;}
        fieldset {padding: 50px;}
    </style>
</head>
<body>
    <table border="1" align="center" >
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                </h2>
                <h2 align="center">
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2>
                <h5 align="right">
                <a href="../TermsOfServices/termsAll.php">Terms of Services</a> |
                <a href="../Auth/signIn.php">Sign out</a> |
                <a href="../ManageProfile/viewProfile.php">Profile</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <p align="center">
                    
                </p>
                <h2 align="center">RULES and REGULATIONS</h2>
                <fieldset>
                <div style="text-align: left;">
        <?php echo "<p style='font-size: 20px;'>$rule</p>"; ?>
    </div></fieldset>
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


