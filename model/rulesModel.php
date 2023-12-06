
<?php
// require('db.php');
 
// function getRule() {    
//     $conn = getConnection();

//     if (!$conn) {
//         die("Database connection failed: " . mysqli_connect_error());
//     }

//     $sql = "SELECT rule FROM rules ";
//     $result = mysqli_query($conn, $sql);
 
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         mysqli_close($conn);
//         return $row['rule'];
//     } else {
//         mysqli_close($conn);
//         return "Rule not found";
//     }
// }
 
// function updateRule($newRule) {
//     $conn = getConnection();

//     if (!$conn) {
//         die("Database connection failed: " . mysqli_connect_error());
//     }

//     $sql = "select * from rules";
//     $result = mysqli_query($conn, $sql);
//     $count = mysqli_num_rows($result);
 
//     if ($count == 1) {
//         $sql = "UPDATE rules SET rule = '$newRule'";
//     } else {
//         $sql = "insert into rules (rule) values ('{$newRule}')";
//     }
   
//     $result = mysqli_query($conn, $sql);

//     if ($result) {
//         mysqli_close($conn);
//         return true;
//     } else {
//         mysqli_close($conn);
//         return false;
//     }
// }
?>

<?php
require('db.php');

function getRules() {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT R1, R2, R3, R4, R5, R6 FROM rules";
    $result = mysqli_query($conn, $sql);

    $rules = [];

    if ($row = mysqli_fetch_assoc($result)) {
        $rules['R1'] = $row['R1'];
        $rules['R2'] = $row['R2'];
        $rules['R3'] = $row['R3'];
        $rules['R4'] = $row['R4'];
        $rules['R5'] = $row['R5'];
        $rules['R6'] = $row['R6'];
    }

    mysqli_close($conn);

    return $rules;
}

function updateRules($newRules) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM rules";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $sql = "UPDATE rules SET R1 = '{$newRules['R1']}', R2 = '{$newRules['R2']}', R3 = '{$newRules['R3']}', R4 = '{$newRules['R4']}', R5 = '{$newRules['R5']}', R6 = '{$newRules['R6']}' ";
    } else {
        $sql = "INSERT INTO rules (R1, R2, R3, R4, R5, R6) VALUES ('{$newRules['R1']}', '{$newRules['R2']}', '{$newRules['R3']}', '{$newRules['R4']}', '{$newRules['R5']}', '{$newRules['R6']}')";
    }
    

    $result = mysqli_query($conn, $sql);

    if($result){
        $dataToSend=["success"=>true];
        $jsonData=json_encode($dataToSend);

        return $jsonData;
    } else {
        $dataToSend=["success"=>false, "error"=>true];
        $jsonData=json_encode($dataToSend);

        return $jsonData;
    }

}
?>


 