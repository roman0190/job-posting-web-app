<html>

<head>
    <title>My Jobs</title>
    <link rel="stylesheet" href="../../assets/style.css">

</head>

<body>
    <center>
        <form name="registrationForm" action="" method="POST" onsubmit="validateForm(e)">

            <h3>REGISTRATION</h3>
            <hr style="margin: 20px 100px;">
            <table class="form" border="0" cellspacing="0" cellpadding="0">
                <!-- Input fields with IDs -->
                <tr>
                    <td><label for="first_name">First Name</label></td>
                    <td>: <input type="text" id="first_name" name="first_name"></td>
                </tr>
                <tr>
                    <td><label for="last_name">Last Name</label></td>
                    <td>: <input type="text" id="last_name" name="last_name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>: <input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>: <input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm Password</label></td>
                    <td>: <input type="password" id="confirmPassword" name="confirmPassword"></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td>:
                        <input type="radio" id="male" name="gender" value="Male"> Male
                        <input type="radio" id="female" name="gender" value="Female"> Female
                        <input type="radio" id="other" name="gender" value="Other"> Other
                    </td>
                </tr>
                <tr>
                    <td><label>User Type</label></td>
                    <td>:
                        <input type="radio" id="applicant" name="user_type" value="applicant"> User
                        <input type="radio" id="recruiter" name="user_type" value="recruiter"> Recruiter
                        <input type="radio" id="admin" name="user_type" value="admin"> Admin
                    </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>: <input type="date" id="dob" name="dob"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <p id="error" style="color: red;"></p>
                    </td>

                </tr>
            </table>
            <div>
                <!-- Submit button -->
                <input type="button" value="Sign Up" name="submit" onclick="validateForm()" />
            </div>
        </form>
    </center>
    <script src='../../assets/JS/Auth/registration.js'>

    </script>
</body>

</html>