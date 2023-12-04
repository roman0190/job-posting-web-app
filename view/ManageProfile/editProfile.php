<?php
// require_once('../../controller/ManageProfile/editCheck.php');
// require_once('../model/profileModel.php');
//     $username ="mitti";
//     $currentProfile = getUser($username);
 require_once("../../controller/ManageProfile/viewCheck.php")
?>

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
                <form action="editCheck.php" method="post" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="2"><h2 align="center">Edit Profile</h2></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="name">Name:</label><hr>
                            </td>
                            <td>
                                <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email:</label><hr>
                            </td>
                            <td>
                                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="gender">Gender:</label><hr>
                            </td>
                            <td>
                                <select id="gender" name="gender">
                                    <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dob">Date of Birth:</label><hr>
                            </td>
                            <td>
                                <input type="date" id="dob" name="dob" value="<?php echo $user['dob']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="profile-picture">Profile Picture:</label>
                            </td>
                            <td>
                                <img id="current-profile-picture" src="<?php echo $user['pfp']; ?>" alt="Profile Picture">
                                <br>
                                <input type="file" id="profile-picture" name="profile-picture">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="button" onclick="saveChanges()">Save Changes</button>
                                <a href="changePassword.php"><button type="button">Change Password</button></a>
                                <a href="viewProfile.php"><button type="button">Back to Profile</button></a>
                            </td>
                        </tr>
                        <tr>
                        <td colspan =3>
                            <p id="error" style="color:red;"></p>
                        </td>
                    </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <script src="../../assets/JS/ManageProfile/editProfile.js"></script>
</body>
</html>
