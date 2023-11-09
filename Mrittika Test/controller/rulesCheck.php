<?php
require_once('../../model/rulesModel.php');

if (isset($_POST['newRule'])) {
    $newRule = $_POST['newRule'];

    if (updateRule($newRule)) {
        header('Location: rulesAdmin.php');
        exit();
    }
}

$rule = "This is the admin rule page. You can update this Rule to provide important information to your users.";

$rule = getRule();
?>
