<?php
require('db.php');

function getTerms() {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT T1, T2, T3, T4, T5, T6 FROM terms_of_services";
    $result = mysqli_query($conn, $sql);

    $terms = [];

    if ($row = mysqli_fetch_assoc($result)) {
        $terms['T1'] = $row['T1'];
        $terms['T2'] = $row['T2'];
        $terms['T3'] = $row['T3'];
        $terms['T4'] = $row['T4'];
        $terms['T5'] = $row['T5'];
        $terms['T6'] = $row['T6'];
    }

    mysqli_close($conn);

    return $terms;
}

function updateTerms($newTerms) {
    $conn = getConnection();

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM terms_of_services";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        
        $sql = "UPDATE terms_of_services SET T1 = '{$newTerms['T1']}', T2 = '{$newTerms['T2']}', T3 = '{$newTerms['T3']}', T4 = '{$newTerms['T4']}', T5 = '{$newTerms['T5']}', T6 = '{$newTerms['T6']}'";
    } else {
        
        $sql = "INSERT INTO terms_of_services (T1, T2, T3, T4, T5, T6) VALUES ('{$newTerms['T1']}', '{$newTerms['T2']}', '{$newTerms['T3']}', '{$newTerms['T4']}', '{$newTerms['T5']}', '{$newTerms['T6']}')";
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
