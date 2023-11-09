<?php
$message = "";
if (isset($_REQUEST['id'])) {
    require_once("../../model/reportModel.php");
    $jobId = $_REQUEST['id'];
    $reporterId = $_COOKIE['userId'];
    $message = reportJob($jobId, $reporterId);
} else {
    $message = 'Invalid Job Id';
}
