<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    // Validate username and password (add your validation logic here)
    if (empty($username) || empty($password)) {
        $error_message = "Both username and password are required.";
    } else {
        // Check the credentials with your database (replace with your own database logic)
        $db_username = 'username'; // Replace with your database username
        $db_password = 'password'; // Replace with your database password

        if ($username === $db_username && $password === $db_password) {
            // Successful sign-in
            if ($remember_me) {
                // If "Remember Me" is checked, set cookies
                setcookie('username', $username, time() + 86400 * 30, '/');
                setcookie('password', $password, time() + 86400 * 30, '/');
            }

            // Redirect to the "privacy.php" page
            header('Location: privacy.php');
            exit();
        } else {
            $error_message = "Invalid username or password.";
        }
    }
}
?>


<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
            <table width="500px"border=1 align="center">
               
        <tr>
            <th colspan="2">
                <h2 align="left">
                <img align="left" src="logo.png" alt="Company Logo" width="80" height="80">
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="nonadminHome.php">Home</a> |
                    <a href="signUp.php">Signup</a>
                </h5>
            </th>
        </tr>
                   
                <tr>
                    <td height=150px align="center">
                    <form method="post" action="signIncheck.php">
            <fieldset >
            <legend><h3>Signin</h3></legend>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value=""><br><br>
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Remember Me</label><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
            <a href="forgotPassword.php">Forgot Password</a><br>
           
        </fieldset>
    </form>
                
        
            </table>
     
</body>
</html>