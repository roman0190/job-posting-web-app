<?php
if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'empty']);
} else {
    require_once('../../model/userModel.php');
    require_once('../../model/jobModel.php');
    $data = json_decode($_REQUEST['data'], true);
    $oneJob = fetchOneJob($data['id']);
    echo json_encode(suggestedUser($oneJob));
}
