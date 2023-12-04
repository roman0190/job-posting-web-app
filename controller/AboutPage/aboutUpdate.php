<?php
$userId = "";
$userType = "";
if (isset($_COOKIE['auth']) && isset($_COOKIE['userId']) && isset($_COOKIE['userType'])) {
    $userId = $_COOKIE['userId'];
    $userType = $_COOKIE['userType'];
} else {
    session_start();
    if (isset($_SESSION['auth']) && isset($_SESSION['userId']) && isset($_SESSION['userType'])) {
        $userId = $_SESSION['userId'];
        $userType = $_SESSION['userType'];
    }
}

if ($userType != "admin") {
    echo json_encode(['error' => "Not an admin user"]);
}


include_once('../../model/aboutModel.php');


if (isset($_REQUEST['data'])) {

    $data = json_decode($_REQUEST['data']);

    if ($data->about) {
        echo json_encode(updateAbout($data->about));
    } else {
        echo json_encode(['error' => "Empty data"]);
    }
}
