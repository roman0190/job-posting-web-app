<?php
if (isset($_REQUEST['data'])) {
    require_once("../../model/jobModel.php");

    $data = json_decode($_REQUEST['data'], true);
    echo json_encode(fetchAllJobsWithFilters(
        $data['search'],
        $data['category'],
        $data['subCategory'],
        $data['skills'],
        $data['experience'],
        $data['type'],
        $data['location']
    ));
} else echo json_encode([]);
