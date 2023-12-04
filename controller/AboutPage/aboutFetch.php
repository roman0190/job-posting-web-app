<?php



include_once('../../model/aboutModel.php');
$about = fetchAbout();
echo json_encode($about);
