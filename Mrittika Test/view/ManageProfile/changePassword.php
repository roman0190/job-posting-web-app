<!DOCTYPE html>
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
                <form action="" method="post">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Change Password</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="old-password">Old Password:</label>
                            </td>
                            <td>
                                <input type="password" id="old-password" name="old-password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="new-password">New Password:</label>
                            </td>
                            <td>
                                <input type="password" id="new-password" name="new-password" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="confirm-new-password">Confirm New Password:</label>
                            </td>
                            <td>
                                <input type="password" id="confirm-new-password" name="confirm-new-password" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">Update</button>
                                <a href="viewProfile.php"><button type="button">Back to Profile</button></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
