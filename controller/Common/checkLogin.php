<?php

if (isset($_COOKIE['userId']) && isset($_COOKIE['userType']) && isset($_COOKIE['username'])) {
    echo json_encode(['loggedIn' => true, 'userId' => $_COOKIE['userId'], 'userType' => $_COOKIE['userType'], 'username' => $_COOKIE['username']]);
} else {
    session_start();
    if (isset($_SESSION['userId']) && isset($_SESSION['userType']) && isset($_SESSION['username'])) {
        echo json_encode(['loggedIn' => true, 'userId' => $_SESSION['userId'], 'userType' => $_SESSION['userType'], 'username' => $_SESSION['username']]);
    } else  echo json_encode(['loggedIn' => false]);
}
