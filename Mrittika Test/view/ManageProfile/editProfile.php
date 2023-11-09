<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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

        #current-profile-picture {
            max-width: 100px;
            max-height: 100px;
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
                <form action="updateProfile.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Edit Profile</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="name">Name:</label><hr>
                            </td>
                            <td>
                                <input type="text" id="name" name="name" value="John Doe">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email:</label><hr>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" value="john@example.com">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="gender">Gender:</label><hr>
                            </td>
                            <td>
                                <select id="gender" name="gender">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dob">Date of Birth:</label><hr>
                            </td>
                            <td>
                                <input type="date" id="dob" name="dob" value="1990-01-01">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="profile-picture">Profile Picture:</label>
                            </td>
                            <td>
                                <img id="current-profile-picture" src="propic.jpg" alt="Profile Picture">
                                <br>
                                <input type="file" id="profile-picture" name="profile-picture">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">Save Changes</button>
                                <a href="changePassword.php"><button type="button">Change Password</button></a>
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
