<?php
require_once("../../model/termsModel.php");

if(isset($_COOKIE["userId"])){
    $terms = getTerms();
}
else if(isset($_SESSION["userId"])){
    $terms = getTerms();
}
else{
    header('Location: ../Auth/signIn.php');
}

if(isset($_REQUEST['data'])){
    $data = $_REQUEST['data'];
    $parsedData = json_decode($data);

    $newTerms = [
        'T1' => $parsedData->T1,
        'T2' => $parsedData->T2,
        'T3' => $parsedData->T3,
        'T4' => $parsedData->T4,
        'T5' => $parsedData->T5,
        'T6' => $parsedData->T6
    ];

    echo(updateTerms($newTerms));
}
?>
