<?php
if (isset($_COOKIE['userId']) && isset($_COOKIE['userRType']) && isset($_COOKIE['username'])) {
    return json_encode(['loggedIn' => true, 'userId' => $_COOKIE['userId'], 'userType' => $_COOKIE['userType'], 'username' => $_COOKIE['username']]);
} else return json_encode(['loggedIn' => false]);
