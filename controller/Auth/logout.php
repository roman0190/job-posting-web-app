<?php
session_start();
//session_destroy();
//session_unset($_SESSION['flag']);
unset($_SESSION['auth']);
unset($_SESSION['userId']);
unset($_SESSION['userType']);
setcookie('auth', "",  time() - 3600);
setcookie('userId', "",  time() - 3600);
setcookie('userType', "",  time() - 3600);

header('location: login.php');
