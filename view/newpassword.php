<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table width="500px" border="1" align="center">
        <tr>
            <th colspan="2">
                <h2 align="left">
                    <img align="left" src="../img/logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="publicHome.php">Home</a> |
                    <a href="Signin.php">Signin</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td height="150px" align="center">
                <form method="post" action="Signin.php">
                    <fieldset>
                        <legend><h3>New Password</h3></legend>
                        <label>New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" required><br><br>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_pass" required><br><br>
                        
                        
                        <input type="submit" name="submit" value="Submit">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
