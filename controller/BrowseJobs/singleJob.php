<?php

if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no id found']);
} else {
    $data = json_decode($_REQUEST['data']);
    include('../../model/jobModel.php');
    echo json_encode(fetchOneJob($data->id));
}
