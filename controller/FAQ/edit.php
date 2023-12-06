<?php
include_once('../../model/faqModel.php');
if (isset($_POST['data'])) {
    $data = (array) (json_decode($_POST['data']));
    echo json_encode(updateFAQ($data));
}
