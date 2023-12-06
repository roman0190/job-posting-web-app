
<?php
require('db.php');
 
function getRule() {    
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT rule FROM rules ";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        return $row['rule'];
    } else {
        mysqli_close($conn);
        return "Rule not found";
    }
}
 
function updateRule($newRule) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "select * from rules";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
 
    if ($count == 1) {
        $sql = "UPDATE rules SET rule = '$newRule'";
    } else {
        $sql = "insert into rules (rule) values ('{$newRule}')";
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
 
?>


 