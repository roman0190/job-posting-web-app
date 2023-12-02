<?php
require_once('../../model/termsModel.php');

if (isset($_POST['newTerm'])) {
    $newTerm = $_POST['newTerm'];

    
    if (updateTerms($newTerm)) {
        header('Location: termsAdmin.php');
        exit();
    }
}

$terms = getTerms();
?>
