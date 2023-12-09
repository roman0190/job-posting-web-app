<?php 

if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no data recieved']);
    
}else{
    
    $data = json_decode($_REQUEST['data'],true);

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
            'alreadyApplied' => true,
        ];
        
        echo json_encode($response);
    }}

?>