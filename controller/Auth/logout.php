<?php
session_start();
//session_destroy();
//session_unset($_SESSION['flag']);
unset($_SESSION['username']);
unset($_SESSION['loggenIn']);
unset($_SESSION['userId']);
unset($_SESSION['userType']);
unset($_SESSION['userInfo']);
session_destroy();
setcookie('username', "",  time() - 3600, "/");
setcookie('loggenIn', "",  time() - 3600, "/");
setcookie('userId', "",  time() - 3600, "/");
setcookie('userType', "",  time() - 3600, "/");
setcookie('userInfo', json_encode($userInfo),time()-3600, "/");

header('location: login.php');
