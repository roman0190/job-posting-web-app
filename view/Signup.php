<?php
if(isset($_REQUEST['submit'])){
    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_pass = $_REQUEST['confirm_pass'];

    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    } else {
        $gender = '';
    }

    $date_of_birth = $_REQUEST['dob'];

    if($name == ''){
        $error_message .= "You must fill in your Name! <br>";
    }
    if($email == ''){
        $error_message .= "You must fill in your Email! <br>";
    }
    if($username == ''){
        $error_message .= "You must fill in your User Name! <br>";
    }
    if($password == ''){
        $error_message .= "You must fill in your Password! <br>";
    }

    if($confirm_pass == '' && $confirm_pass !== $password){
        $error_message .= "Your password doesn't match! <br>";
    }
    if($gender == ''){
        $error_message .= "You must fill in your Gender! <br>";
    }
    if ($date_of_birth == '') {
        $error_message .= "You must fill in your Date of Birth! <br>";
    }

    if ($name !== '' && $email !== '' && $username !== '' && $password !== '' && $confirm_pass !== '' && $confirm_pass == $password && $gender !== '' && $date_of_birth !== '') {


        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
        setcookie('confirm_pass', $confirm_pass, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('date_of_birth', $date_of_birth, time() + (86400 * 30), "/");

        header('location: login.php');
    }   
    
}
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
            <td>
                <form action="#" method="post">
                    <fieldset>
                        <legend><h3>Signup</h3></legend>
                        <label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" required><br><br>
                        <label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" id="email" name="email">
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                        <label>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" required><br><br>
                        <label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" required><br><br>
                        <label>Confirm Password</label>
                        <input type="password" name="confirm_pass" required><br><br>
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="Male" /> Male
                            <input type="radio" name="gender" value="Female" /> Female
                            <input type="radio" name="gender" value="Other" /> Other<br><br>
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dob" required><br><br>
                        </fieldset>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
