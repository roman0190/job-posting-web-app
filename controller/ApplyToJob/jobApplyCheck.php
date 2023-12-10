<?php
include_once('../../model/db.php');
require('../../model/jobApplyModel.php');

if (isset($_REQUEST['data'])) {

    $data = json_decode($_REQUEST['data'], true);

    $jobId = $data['id'];

    $applicantId = 3;
    session_start();
    if (isset($_COOKIE['userId'])) {
        $applicantId = $_COOKIE['userId'];
    } elseif (isset($_SESSION['userId'])) {
        $applicantId = $_SESSION['userId'];
    }

    $validForApply = checkIfUserApplied($applicantId, $jobId);
    if (!$validForApply) {
        $response = [
            'error' => true,
            'message' => "already applied",
        ];

        echo json_encode($response);
    } else {
        $error_message = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $error_message = '';

            $first_name = $data['first_name'];
            $last_name = $data['last_name'];
            $email = $data['email'];
            $phone_number = $data['phone_number'];
            $address = $data['address'];
            $cv_link = $data['cv_link'];
            $education = $data['education'];
            $skills = $data['skills'];
            $experience = $data['experience'];
            $availability = $data['availability'];

            if (empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) || empty($address) || empty($cv_link) || empty($education) || empty($skills) || empty($experience) || empty($availability)) {
                $error_message = "All fields are required.";
            } else {
                $insertResult = insertJobApplication($applicantId, $first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability, $jobId);

                if ($insertResult) {


                    $response = [
                        'success' => true,
                        'message' => "successfully applied",
                    ];

                    echo json_encode($response);
                    exit();
                } else {
                    $response = [
                        'error' => true,
                        'message' => $error_message,
                    ];

                    echo json_encode($response);
                }
            }
        }
    }
}
?>

