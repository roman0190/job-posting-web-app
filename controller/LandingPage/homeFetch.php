<?php

$description = getSiteDescription(); 

session_start();

$_SESSION['site_description'] = $description;
?>
