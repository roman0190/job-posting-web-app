<?php
    include_once('../../controller/signUpCheck.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Page</title>
    <style>
        table {
            width: 400px;
        }

        fieldset {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="100" height="80">
                    &nbsp;&nbsp;&nbsp;&nbsp;MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="../../Alvi Test/view/nonadminHome.php">Home</a> |
                    <a href="signIn.php">Signin</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <form  action="" method="post">
                    <fieldset>
                        <label><center><h2>Signup</h2></center></label><hr>
                        <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" required><br><br>
                        <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" name="email" required>
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                        <label for="username">&nbsp;&nbsp;&nbsp;&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" id="username"><br><br>
                        <label for="password">&nbsp;&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" required><br><br>
                        <label for="confirm_pass">&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password:</label>
                        <input type="password" name="confirm_pass" required><br><br>
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;User Type:</label>
                        <input type="radio" name="user_type" value="applicant" required> Applicant
                        <input type="radio" name="user_type" value="recruiter" required> Recruiter
                        <br><br>
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Gender:</label>
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" required> Female
                            <input type="radio" name="gender" value="Other" required> Other<br><br>
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth</label>
                            <input type="date" name="dob" required><br><br><hr>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset"><hr>
    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>

