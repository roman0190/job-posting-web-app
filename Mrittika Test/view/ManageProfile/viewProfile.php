<?php
session_start();
require_once('../model/model.php');
if (!isset($_SESSION['user_id'])) {
    
    header('Location: signIn.php');
    exit();
} 

$user_id = $_SESSION['user_id'];
$user = getUserById($user_id);

if (!$user) {
    echo "User not found";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Profile</title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="../../Alvi Test/view/nonadminHome.php">Home</a>|
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <form action="" method="post">
                    <fieldset>
                        <legend>
                            <center>
                                <h3>View Profile</h3>
                            </center>
                        </legend>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><?= $user['name'] ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><?= $user['email'] ?></td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td><?= $user['gender'] ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td><?= $user['dob'] ?></td>
                            </tr>
                            <tr>
                                <td>Profile Picture:</td>
                                <td><img src="<?= $user['pfp'] ?>" alt="Profile Picture" width="100" height="100"></td>
                            </tr>
                        </table>
                        <div align="center">
                            <a href="edit_profile.php">Edit Profile</a>
                        </div>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
