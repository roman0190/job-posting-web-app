<?php
 require_once('db.php');
 function contactinfoView() {
    $con = getConnection();

        $sqlFetch = "SELECT * FROM contact_info WHERE id = '1'"; 
        $result = mysqli_query($con, $sqlFetch);

        if ($result && mysqli_num_rows($result) > 0) {
            $contactInfo = mysqli_fetch_assoc($result);
            return $contactInfo; 
        } else {
            return "No Information Found"; 
        }
   
}

function contactInfoUpdate($email, $phoneNumber, $link) {
    $con = getConnection();

    
    $sql = "UPDATE contact_info 
            SET email = '$email', phone_number = '$phoneNumber', link = '$link'
            WHERE id = '1'";

    if (mysqli_query($con, $sql)) {
        return "Contact Information Updated Successfully"; 
    } else {
        return false; 
    }
}
?>