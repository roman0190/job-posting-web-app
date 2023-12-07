<?php
require_once("../../model/rulesModel.php");

if(isset($_COOKIE["userId"])){
    $rules = getRules();
}
else if(isset($_SESSION["userId"])){
    $rules = getRules();
}
else{
    header('Location: ../Auth/login.php');
}

if(isset($_REQUEST['data'])){
    $data = $_REQUEST['data'];
    $parsedData = json_decode($data);

    $newRules = [
        'R1' => $parsedData->R1,
        'R2' => $parsedData->R2,
        'R3' => $parsedData->R3,
        'R4' => $parsedData->R4,
        'R5' => $parsedData->R5,
        'R6' => $parsedData->R6
    ];

    echo(updateRules($newRules));
}
?>
