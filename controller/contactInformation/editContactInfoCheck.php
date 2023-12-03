<?php
require_once("../../model/contactinfoModel.php");

    $info = $_POST["contactInfo"];
    $contactInfo = json_decode($info, true); 

    
    if (isset($contactInfo["email"], $contactInfo["number"], $contactInfo["link"])) {
        $email = $contactInfo["email"];
        $number = $contactInfo["number"];
        $link = $contactInfo["link"];

        
        contactInfoUpdate($email, $number, $link);

       
        $contactInfo = contactinfoView();

        if (!$contactInfo) {
            echo "Error retrieving contact information.";
        } else {
            echo json_encode($contactInfo);
        }
    } else {
        echo "Incomplete or invalid data submitted.";
    }

?>

