<?php

if (!isset($_REQUEST['data'])) {
    echo json_encode(['error' => 'no id found']);
} else {
    session_start();
    if (isset($_COOKIE['userId']) || isset($_SESSION['userId'])) {
        $data = json_decode($_REQUEST['data']);
        $reporterId = $_COOKIE['userId'] || $_SESSION['userId'];
        require_once("../../model/reportModel.php");
        echo json_encode(reportApplicant($data->id, $reporterId));
    } else {
        echo json_encode(['error' => 'user is not logged in']);
    }
}
