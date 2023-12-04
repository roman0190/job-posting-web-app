<?php
require('../model/adminHomemodel.php');
$newdescription = $_REQUEST['update'];
$loo=updateAdminDescription($newdescription);
echo "Well Done";


?>