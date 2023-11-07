<?php
if(isset($_REQUEST['submit'])){
    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_pass = $_REQUEST['confirm_pass'];
    $user_type = $_REQUEST['user_type'];


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

    if (empty($error_message)) {

        header('location: signIn.php');
    }   
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Page</title>
    <style>
        table {
            width: 450px;
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
                    MARZ JOB SITE
                </h2>
                <h5 align="right">
                    <a href="../../Alvi Test/view/nonadminHome.php">Home</a> |
                    <a href="signIn.php">Signin</a>
                </h5>
            </th>
        </tr>
        <tr>
            <td>
                <form  action="../controller/signUpCheck.php" method="post">
                    <fieldset>
                        <legend><center><h3>Signup</h3></center></legend>
                        <label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" required><br><br>
                        <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="email" name="email" required>
                        <input type="button" value="i" title="hint: xyz@gmail.com"><br><br>
                        <label for="username">Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="username" id="username"><br><br>
                        <label for="password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" name="password" required><br><br>
                        <label for="confirm_pass">Confirm Password:</label>
                        <input type="password" name="confirm_pass" required><br><br>
                        <label>User Type:</label>
                        <input type="radio" name="user_type" value="applicant" required> Applicant
                        <input type="radio" name="user_type" value="recruiter" required> Recruiter
                        <br><br>
                        <fieldset>
                            <legend><center>Gender</center></legend>
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female" required> Female
                            <input type="radio" name="gender" value="Other" required> Other<br><br>
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

