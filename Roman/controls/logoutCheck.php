<?php
session_start();
session_destroy();
header('location:../view/signin.php');
?>