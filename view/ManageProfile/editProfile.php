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
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/ManageProfile/editProfile.css">
</head>
<body>
    <div class="container"> 
        <table>
            <tr>
                <th colspan="2">
                    <h2>
                        <img src="logo.png" alt="Company Logo" width="100" height="80">
                        &nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                    </h2>
                    <h5 align="right">
                        <a href="../Auth/logout.php">Logout</a>
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
                                    <label for="name">Name:</label>
                                </td>
                                <td>
                                    <input class="input-field" type="text" id="name" name="name" value="<?php echo $user['name']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="email">Email:</label>
                                </td>
                                <td>
                                    <input class="input-field" type="email" id="email" name="email" value="<?php echo $user['email']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="gender">Gender:</label>
                                </td>
                                <td>
                                    <select class="select-field" id="gender" name="gender">
                                        <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="dob">Date of Birth:</label>
                                </td>
                                <td>
                                    <input class="input-field" type="date" id="dob" name="dob" value="<?php echo $user['dob']; ?>">
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
                                <td colspan="2" class="button-container">
                                    <button type="button" onclick="saveChanges()" class="button">Save Changes</button>
                                    <a href="changePassword.php"><button type="button" class="button">Change Password</button></a>
                                    <a href="viewProfile.php"><button type="button" class="button">Back to Profile</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p id="error" class="error-message"></p>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <script src="../../assets/JS/ManageProfile/editProfile.js"></script>
</body>
</html>
