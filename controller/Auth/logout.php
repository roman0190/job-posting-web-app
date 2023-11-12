<?php
session_start();
//session_destroy();
//session_unset($_SESSION['flag']);
unset($_SESSION['auth']);
unset($_SESSION['userId']);
unset($_SESSION['userType']);
setcookie('auth', "",  -1);
setcookie('userId', "",  -1);
setcookie('userType', "",  -1);

header('location: login.php');
