<?php 
 require_once("../../controller/ManageProfile/viewCheck.php")
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Profile Page</title>
    <style>
        table {
            width: 400px;
            margin: auto;
        }

        th, td {
            /* background-color: #D3D3D3; */
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
        .container{
            width: 100%;
            height: 100vh;
            /* background-image: url(bgPic.jfif); */
            /* background-color: lightblue; */
            background-size: cover;
            background-position: center
        }
    </style>
</head>
<body>
    <div class ="container"> 
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
                            <td>
                                <label for="profile-picture">Profile Picture:</label><hr>
                            </td>
                            <td>
                                <img src="propic.jpg" alt="Profile Picture" width="100" height="100">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">Edit Profile</button>
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
