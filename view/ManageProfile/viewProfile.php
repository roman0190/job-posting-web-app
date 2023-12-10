<?php 
 require_once("../../controller/ManageProfile/viewCheck.php")
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/CSS/ManageProfile/viewProfile.css">
</head>
<body>
    <div class="container"> 
        <table>
            <tr>
                <th colspan="2">
                    <h2>
                        <img src="logo.png" alt="Company Logo" width="100" height="80">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                    </h2>
                    <h5 align="right">
                        <a href="../Auth/logout.php">Logout</a>
                    </h5>
                </th>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="profile-pic">
                        <img src="propic.jpg" alt="Profile Picture">
                    </div>
                    <form action="editProfile.php" method="post">
                        <table>
                            <tr>
                                <th colspan="2"><h2 align="center">Profile Information</h2></th>
                            </tr>
                            <tr>
                                <td>
                                    <label for="name">Name:</label><hr>
                                </td>
                                <td>
                                    <text id="name"><?php echo $user["name"] ?> </text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="email">Email:</label><hr>
                                </td>
                                <td>
                                    <text id="email"><?php echo $user["email"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="gender">Gender:</label><hr>
                                </td>
                                <td>
                                    <text id="gender"><?php echo $user["gender"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="dob">Date of Birth:</label><hr>
                                </td>
                                <td>
                                    <text id="dob"><?php echo $user["dob"] ?></text><hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="button-container">
                                    <button class="button" type="submit">Edit Profile</button><br><br>
                                    <a href="../dashboard/commonDashboard.php">Dashboard</a>
                            
                                </td>
                               
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
