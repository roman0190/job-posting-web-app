<?php
include ('../../model/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = getConnection();
   
    $queryDeleteApplicant = "DELETE FROM reported_applicants WHERE id = $id";
    mysqli_query($con, $queryDeleteApplicant);
    

    header("Location:../../view/manageJobandApplicant manageReportedapplicant.php");
    exit();
}
?>
