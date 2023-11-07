<?php
    require_once('db.php');
    
    function insertUser($name, $email, $username, $password, $user_type, $gender, $dob) {
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

    function userValidation($username, $password){
        $conn = getConnection();
        $sql = "SELECT * FROM users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
    
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function insertJobApplication($first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability) {
        $conn = getConnection();
        $sql = "INSERT INTO applications (first_name, last_name, email, phone_number, address, cv_link, education, skills, experience, availability)
                VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$address', '$cv_link', '$education', '$skills', '$experience', '$availability')";
    
        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            return true;
        } else {
            mysqli_close($conn);
            die("Error: " . mysqli_error($conn));
        }
    }
    
?>
