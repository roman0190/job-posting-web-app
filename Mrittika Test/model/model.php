<?php
require_once('db.php');

function insertUser($name, $email, $username, $password, $user_type, $gender, $dob)
{
    $conn = getConnection();
    $sql = "INSERT INTO users (name, email, username, password, user_type, gender, dob)
                VALUES ('$name', '$email', '$username', '$password', '$user_type', '$gender', '$dob')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        die("Error: " . mysqli_error($conn));
    }
}

function userValidation($username, $password)
{
    $conn = getConnection();
    $sql = "SELECT * FROM users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}

function insertJobApplication($applicantId, $first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability, $jobId)
{
    $conn = getConnection();
    $sql = "INSERT INTO applications (applicant_id, first_name, last_name, email, phone_number, address, cv_link, education, skills, experience, availability, job_id)
                VALUES ('$applicantId', '$first_name', '$last_name', '$email', '$phone_number', '$address', '$cv_link', '$education', '$skills', '$experience', '$availability','$jobId')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        die("Error: " . mysqli_error($conn));
    }
}

function checkIfUserApplied($applicantId, $jobId)
{

    $conn = getConnection();
    $sql = "select * from applications where applicant_id='$applicantId' and job_id = '$jobId'";

    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        return true;
    } else {

        return false;
    }
}

function getUserById($username)
{
    $conn = getConnection();
    $sql = "SELECT name, email, gender, dob, pfp FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $user;
    } else {
        mysqli_close($conn);
        return null;
    }
}


// function updateRule($ruleId, $newRuleText)
// {
//     $conn = getConnection();
//     $newRuleText = mysqli_real_escape_string($conn, $newRuleText);
//     $sql = "UPDATE rules SET rule_text='$newRuleText' WHERE rule_id=$ruleId";
//     if (mysqli_query($conn, $sql)) {
//         mysqli_close($conn);
//         return true;
//     } else {
//         mysqli_close($conn);
//         die("Error: " . mysqli_error($conn));
//     }
// }

function checkIfUserIsAdmin($username)
{
    $conn = getConnection();
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "SELECT user_type FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $userType = $row['user_type'];

        // Check if the user type indicates admin (you may have a different admin role or permission mechanism)
        if ($userType === 'admin') {
            mysqli_close($conn);
            return true;
        }
    }

     mysqli_close($conn);
     return false;
 }

// function getRules()
// {
//     $conn = getConnection();
//     $sql = "SELECT * FROM rules";
//     $result = mysqli_query($conn, $sql);
//     $rules = [];

//     while ($row = mysqli_fetch_assoc($result)) {
//         $rules[] = $row;
//     }

//     mysqli_close($conn);
//     return $rules;
// }

// function displayRules($isAdmin)
// {
//     $rules = getRules();

//     echo "<h1>RULES and REGULATIONS</h1>";
//     echo "<p>Welcome to MARZ JOB SITE!</p>";

//     foreach ($rules as $rule) {
//         echo "<h2>Rule " . $rule['id'] . ": " . $rule['rule'] . "</h2>";
//     }

//     if ($isAdmin) {
//         echo "<form method='post'>";
//         echo "<input type='submit' name='edit_rule' value='Edit Rules'>";
//         echo "</form>";
//     }
// }

// function displayEditForm()
// {
//     $rules = getRules();

//     echo "<h1>Edit Rules</h1>";

//     foreach ($rules as $rule) {
//         echo "<form method='post'>";
//         echo "<h2>Rule " . $rule['id'] . ":</h2>";
//         echo "<textarea name='new_rule_text' rows='4' cols='50'>" . $rule['rule'] . "</textarea>";
//         echo "<input type='hidden' name='rule_id' value='" . $rule['id'] . "'>";
//         echo "<input type='submit' name='save_changes' value='Save Changes'>";
//         echo "</form>";
//     }
// }

 ?>