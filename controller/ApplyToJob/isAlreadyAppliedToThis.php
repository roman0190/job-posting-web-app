<?php

if (!isset($_REQUEST['id'])) {
    echo json_encode(['error' => 'no data recieved']);
} else {

    $jobId =  $_REQUEST['id'];

    $applicantId = 3;
    session_start();
    if (isset($_COOKIE['userId'])) {
        $applicantId = $_COOKIE['userId'];
    } elseif (isset($_SESSION['userId'])) {
        $applicantId = $_SESSION['userId'];
    }
    require('../../model/jobApplyModel.php');
    $validForApply = checkIfUserApplied($applicantId, $jobId);
    if (!$validForApply) {
        $response = [
            'error' => true,
            'alreadyApplied' => true,
        ];

        echo json_encode($response);
    } else {

        $response = [
            'error' => false,
            'alreadyApplied' => false,
        ];

        echo json_encode($response);
    }
}