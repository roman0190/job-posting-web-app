<?php
include_once("../controller/signUpcheck.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <style>
        table {
            width: 500px;
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
                    <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="nonadminHome.php">Home</a> |
                    <a href="signIn.php">Signin</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <form action="" method="post">
                    <fieldset>
                        <legend>
                            <h3>Signup</h3>
                        </legend>
                        <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" value=<?= $name ?>><br><br>
                        <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email" value=<?= $email ?>>
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                        <label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" value=<?= $username ?>><br><br>
                        <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" value=<?= $password ?>><br><br>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_pass" value=<?= $confirm_pass ?>><br><br>
                        <label>User Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                        <input type="radio" name="user_type" value="Applicant" <?=

                                                                                $user_type == "Applicant" ? 'checked="checked"' : ""


                                                                                ?> /> Applicant
                        <input type="radio" name="user_type" value="Recruiter" <?=

                                                                                $user_type == "Recruiter" ? 'checked="checked"' : ""


                                                                                ?> /> Recruiter
                        <br><br>

                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" <?= $gender == "Male" ? 'checked="checked"' : "" ?> /> Male
                            <input type="radio" name="gender" value="Female" <?= $gender == "Female" ? 'checked="checked"' : "" ?> /> Female
                            <input type="radio" name="gender" value="Other" <?= $gender == "Other" ? 'checked="checked"' : "" ?> /> Other<br><br>
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dob" required value=<?= $date_of_birth ?>><br><br>
                        </fieldset>
                        <p style="color:red"></p><?= $error_message ?></p>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>