<?php
// include_once('../model/db.php');
// require('../../model/jobApplyModel.php');

// if (!isset($_REQUEST['id'])) {
//     //header('Location: ' . $_SERVER['HTTP_REFERER']);
// }

// $jobId = $_REQUEST['id'];

// $applicantId = 1;
// session_start();
// if (isset($_COOKIE['userId'])) {

//     $applicantId = $_COOKIE['userId'];
// } elseif (isset($_SESSION['userId'])) {

//     $applicantId = $_SESSION['userId'];

// }


// $validForApply = checkIfUserApplied($applicantId, $jobId);
// if (!$validForApply) {
//     header('Location: alreadyApplied.php');
// }

// $error_message = '';
// if (isset($_POST['submit'])) {
//     $error_message = '';

//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $phone_number = $_POST['phone_number'];
//     $address = $_POST['address'];
//     $cv_link = $_POST['cv_link'];
//     $education = $_POST['education'];
//     $skills = $_POST['skills'];
//     $experience = $_POST['experience'];
//     $availability = $_POST['availability'];

//     if ($first_name == '') {
//         $error_message .= "You must fill in your First Name! <br>";
//     }
//     if ($last_name == '') {
//         $error_message .= "You must fill in your Last Name! <br>";
//     }
//     if ($email == '') {
//         $error_message .= "You must fill in your Email! <br>";
//     }
//     if ($phone_number == '') {
//         $error_message .= "You must fill in your phone_number Number! <br>";
//     }
//     if ($address == '') {
//         $error_message .= "You must fill in your Address! <br>";
//     }
//     if ($cv_link == '') {
//         $error_message .= "You must provide a link to your CV/Resume! <br>";
//     }

//     if (empty($error_message)) {


//         if (insertJobApplication($applicantId, $first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability, $jobId)) {
//             header('Location: viewAppliedJobs.php');
//             exit();
//         } else {
//             $error_message = "Error occurred while submitting the job application.";
//         }
//     }
// }
?>

<?php
//   require_once("../../model/jobApplyModel.php");

//   $first_name = "";
//   $last_name = "";
//   $email = "";
//   $phone_number = "";
//   $address = "";
//   $cv_link = "";
//   $education = "";
//   $skills = "";
//   $experience = "";
//   $availability = "";

//   $error_message = "";

//   if (isset($_REQUEST['data'])) {

//     $error_message = '';

//     $stringData = $_REQUEST['data'];
//     $data = json_decode($stringData);


//     $first_name = $data->first_name;
//     $last_name = $data->last_name;
//     $email = $data->email;
//     $phone_number = $data->phone_number;
//     $address = $data->address;
//     $cv_link = $data->cv_link;
//     $education = $data->education;
//     $skills = $data->skills;
//     $experience = $data->experience;
//     $availability = $data->availability;

//     if ($first_name !== '' && $last_name !== '' && $email !== '' && $phone_number !== '' && $address !== '' && $cv_link !== '' && $education !== '' && $skills !== '' && $experience !== '' && $availability !== '') {
//         require('../../model/model.php'); 

//         $res = ['message' => insertJobApplication($applicantId, $first_name, $last_name, $email, $phone_number, $address, $cv_link, $education, $skills, $experience, $availability, $jobId)];
//         echo json_encode($res);
//     }

//   }

?>

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



    //JSON

}
?>

