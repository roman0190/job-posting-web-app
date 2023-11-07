<?php
include_once('../model/db.php');
require('../model/model.php');

if (isset($_POST['submit'])) {
    $error_message = '';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $cv_link = $_POST['cv_link'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];
    $availability = $_POST['availability'];

    if (empty($first_name)) {
        $error_message .= "You must fill in your First Name! <br>";
    }
    if (empty($last_name)) {
        $error_message .= "You must fill in your Last Name! <br>";
    }
    if (empty($email) || (strpos($email, '@') === false) || (strpos($email, '.') === false)) {
        $error_message .= "You must provide a valid Email! <br>";
    }
    if (empty($phone_number)) {
        $error_message .= "You must fill in your phone Number! <br>";
    }
    if (empty($address)) {
        $error_message .= "You must fill in your Address! <br>";
    }
    if (empty($cv_link)) {
        $error_message .= "You must provide a link to your CV/Resume! <br>";
    }

    if (empty($error_message)) {

        if (insertJobApplication($first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability)) {
            header('Location: ../view/rulesAll.php');
            exit();
        } else {
            $error_message = "Error occurred while submitting the job application.";
        }
    }
}
?>
