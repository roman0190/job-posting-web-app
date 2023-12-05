
<?php
require('db.php'); 

function getAdminDescription() {
    $con = getConnection(); 
    
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
    $sql = "SELECT description FROM landing_page "; 
    $result = mysqli_query($con, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($con);
        return $row['description'];
    } else {
        mysqli_close($con);
        return "Description not found";
    }
}
 
function updateAdminDescription($newDescription) {
    $con = getConnection(); 
    
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
 
 
    $sql = "select * from landing_page";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
 
    if ($count == 1) {
        $sql = "UPDATE landing_page SET description = '$newDescription'";
    } else {
        $sql = "insert into landing_page (description) values ('{$newDescription}')";
    }
   
   
   
    $result = mysqli_query($con, $sql);
 

    if ($result) {
        mysqli_close($con);
        return true;
    } else {
        mysqli_close($con);
        return false;
    }
}
 
function getSiteDescription() {
    $con = getConnection();
 
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
    $sql = "SELECT description FROM landing_page WHERE id = 1";
    $result = mysqli_query($con, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($con);
        return $row['description'];
    } else {
        mysqli_close($con);
        return "Description not found";
    }
}
 