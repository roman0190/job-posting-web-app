<?php
 require('../../model/adminHomemodel.php');
 $newdescription = $_POST['update'];

$loo=updateAdminDescription($newdescription);
echo "Well Done";


?>