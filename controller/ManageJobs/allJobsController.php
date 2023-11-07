<?php
include_once("../../model/jobModel.php");
$userId = $_COOKIE['user']['id'];

$jobs = fetchAllJobsForOneRecruiter($userId);

?>

<html>

</html>