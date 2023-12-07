<?php
include ('../../model/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $con = getConnection();
    // Delete the reported job based on the provided ID
    $queryDeleteJob = "DELETE FROM reported_jobs WHERE id = $id";
    mysqli_query($con, $queryDeleteJob);

    // Redirect back to the manageReportedjob.php page
    header("Location: ../../view/manageJobandApplicant/manageReportedjob.php");
    exit();
}
?>
