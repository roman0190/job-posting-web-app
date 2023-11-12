<?php

$userId = "";
$userType = "";
if (isset($_COOKIE['auth']) && isset($_COOKIE['userId']) && isset($_COOKIE['userType'])) {
    $userId = $_COOKIE['userId'];
    $userType = $_COOKIE['userType'];
} else {
    session_start();
    if (isset($_SESSION['auth']) && isset($_SESSION['userId']) && isset($_SESSION['userType'])) {
        $userId = $_SESSION['userId'];
        $userType = $_SESSION['userType'];
    }
}

if ($userType == "admin") {
    header('location: faqAdmin.php');
}



include_once('../../model/faqModel.php');
// $faqs = fetchFAQ();
$faqs = [['id' => 1, 'question' => 'how to open an account?', 'answer' => 'go to registration and add the account by filling the form.'], ['id' => 2, 'question' => 'how to open an account?', 'answer' => 'go to registration and add the account by filling the form. go to registration and add the account by filling the form.'], ['id' => 3, 'question' => 'how to open an account?', 'answer' => 'go to registration and add the account by filling the form. go to registration and add the account by filling the form.'], ['id' => 4, 'question' => 'how to open an account?', 'answer' => 'go to registration and add the account by filling the form. go to registration and add the account by filling the form.']]


?>



<html>


</html>