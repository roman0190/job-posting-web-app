<?php
require_once("../../controller/ManageProfile/viewCheck.php")
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
    <style>
        table {
            width: 400px;
            margin: auto;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                    &nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="../Auth/signIn.php">Sign out</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td colspan="2">
                <form action="changePassCheck.php" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Change Password</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="oldPassword">Old Password:</label><hr>
                            </td>
                            <td>
                                <input type="password" id="oldPassword" name="oldPassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="newPassword">New Password:</label><hr>
                            </td>
                            <td>
                                <input type="password" id="newPassword" name="newPassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="confirmPassword">Confirm Password:</label><hr>
                            </td>
                            <td>
                                <input type="password" id="confirmPassword" name="confirmPassword" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button" onclick="saveChanges()">Save Changes</button>
                                <a href="viewProfile.php"><button type="button">Back to Profile</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p id="error" style="color:red;"></p>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <script src="../../assets/JS/ManageProfile/changePass.js"></script>
</body>
</html>
