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
<<<<<<< HEAD
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
=======


              
                <tr>
                    <td><label for="last_name">Name</label> </td>
                    <td> : <input type="text" name="last_name" value="<?php echo $last_name ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $last_nameError ?></p>
>>>>>>> 67964a2dd3467862a767f5b4cea0976265cabde1
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
<<<<<<< HEAD
=======
                <tr>
                    <td></td>
                    <td>
                        <p style="color:red;"><?= $genderError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="user_type">User Type</label> </td>
                    <td> :
                        <input type="radio" name="user_type" value="applicant" <?= ($user_type && $user_type == "applicant") ?
                                                                                    'checked="checked"' : "";
                                                                                ?> /> Applicant
                        <input type="radio" name="user_type" value="recruiter" <?= ($user_type && $user_type == "recruiter") ?
                                                                                    'checked="checked"' : "";
                                                                                ?> /> Recruiter
          

                    </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $user_typeError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label> </td>
                    <td> : <input type="date" name="dob" value="<?php echo $dob ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $dobError ?></p>
                    </td>
                </tr>




>>>>>>> 67964a2dd3467862a767f5b4cea0976265cabde1
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