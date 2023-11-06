<!DOCTYPE html>
<html lang="en">
<head>
    <title>MARZ JOB SITE - SignIn</title>
</head>
<body>
    <table width="500px" border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="nonadminHome.php">Home</a> |
                    <a href="signUp.php">SignUp</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="../controller/signInCheck.php">
                    <fieldset>
                        <legend><h3>SignIn</h3></legend>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" value=""><br><br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" value=""><br><br>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        <label for="remember_me">Remember Me</label><br><br>
                        <input type="submit" name="submit" value="Submit"><br><br>
                        <a href="forgotPassword.php">Forgot Password</a><br>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
