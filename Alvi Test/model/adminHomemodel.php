
<?php
require('db.php'); 
 
function getAdminDescription() {
    $conn = getConnection(); 
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
    $sql = "SELECT description FROM description_admin "; 
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row['description'];
    } else {
        mysqli_close($conn);
        return "Description not found";
    }
}
 
function updateAdminDescription($newDescription) {
    $conn = getConnection(); 
    
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
 
 
    $sql = "select * from description_admin";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
 
    if ($count == 1) {
        $sql = "UPDATE description_admin SET description = '$newDescription'";
    } else {
        $sql = "insert into description_admin (description) values ('{$newDescription}')";
    }
   
   
   
    $result = mysqli_query($conn, $sql);
 

    if ($result) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}
 
function getSiteDescription() {
    $conn = getConnection();
 
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
 
    $sql = "SELECT description FROM description_admin WHERE id = 1";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row['description'];
    } else {
        mysqli_close($conn);
        return "Description not found";
    }
}
 