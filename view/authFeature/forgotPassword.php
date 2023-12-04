
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table width="500px" border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="Logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="publicHome.php">Home</a> |
                    <a href="signIn.php">Signup</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="sendCode.php">
                    <fieldset>
                        <legend><h3>Forgot Password</h3></legend>
                        <label>Email</label>
                        <input type="email" id="email" name="email"required>
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                
                        <input type="submit" name="Send Code" value="Send Code"><br><br>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
