<?php
session_start();
session_reset();
session_destroy();
header('location:../view/signin.php');
            
?>