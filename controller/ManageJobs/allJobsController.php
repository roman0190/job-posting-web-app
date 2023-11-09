<?php
include_once("../../model/jobModel.php");
$userId = $_COOKIE['userId'];

$jobs = fetchAllJobsForOneRecruiter($userId);

?>

<html>

</html>