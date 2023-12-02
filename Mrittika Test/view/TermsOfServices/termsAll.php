<?php
include_once("../../model/termsModel.php");

$terms = getTerms();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Terms of Services Page</title>
    <style>
        table { width: 900px; height: 400px; }
        fieldset { padding: 50px; }
    </style>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                </h2>
                <h2 align="center">
                    MARZ JOB SITE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </h2>
                <h5 align="right">
                    <a href="../Rules/rulesAll.php">Rules and Regulations</a> |
                    <a href="../Auth/signIn.php">Sign out</a> |
                    <a href="../ManageProfile/viewProfile.php">Profile</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <h2 align="center">TERMS OF SERVICES</h2>
                <fieldset>
                    <div style="text-align: left;">
                        <?php foreach ($terms as $term) {
                            echo "<p style='font-size: 20px;'>$term</p>";
                        } ?>
                    </div>
                </fieldset>
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
