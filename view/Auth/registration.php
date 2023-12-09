<?php
include_once("../../controller/Auth/registrationCheck.php");



?>
<html>

<head>
    <title>My Jobs</title>
    <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <center>
        <form action="" method="POST" enctype="">


            <h3>REGISTRATION</h3>
            <hr style="margin: 20px 100px;">
            <table class="form" border="0" cellspacing="0" cellpadding="0">


              
                <tr>
                    <td><label for="last_name">Name</label> </td>
                    <td> : <input type="text" name="last_name" value="<?php echo $last_name ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $last_nameError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username</label> </td>
                    <td> : <input type="text" name="username" value="<?php echo $username ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $usernameError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label> </td>
                    <td> : <input type="text" name="email" value="<?php echo $email ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $emailError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label> </td>
                    <td> : <input type="password" name="password" value="<?php echo $password ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $passwordError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm Password</label> </td>
                    <td> : <input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" </td>
                </tr>
                <tr>
                    <td>
                    <td>
                        <p style="color:red;"><?= $confirmPasswordError ?></p>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label> </td>


                    <td> :
                        <input type="radio" name="gender" value="Male" <?= ($gender && $gender == "Male") ?
                                                                            'checked="checked"' : "";
                                                                        ?> /> Male
                        <input type="radio" name="gender" value="Female" <?= ($gender && $gender == "Female") ?
                                                                                'checked="checked"' : "";
                                                                            ?> /> Female
                        <input type="radio" name="gender" value="Other" <?= ($gender && $gender == "Other") ?
                                                                            'checked="checked"' : "";
                                                                        ?> /> Other




                    </td>
                </tr>
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




            </table>
            <div>
                <p style="color: red;"><?= $error ?></p>
                <br>
                <p style="margin-bottom: 20px;"> <a href="login.php">Already have an account? Log In</a></p>
                <input type="submit" value="Sign Up" name="submit" />



            </div>


        </form>
    </center>


    <?php include_once("../components/footer.php") ?>
</body>

</html>