<?php
include_once("db.php");
function fetchFAQ()
{
    $con = getConnection();
    $sql = "select * from faq";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count) {
        $faqTexts = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($faqTexts, $row);
        }
        return ['data' => $faqTexts, "success" => true];
    } else {
        return ['success' => true, 'message' => "No FAQ in Database."];
    }
}

function add($faq)
{

    $con = getConnection();

    $sql = "insert into faq (question,answer) values ('{$faq['question']}','{$faq['answer']}')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return fetchFAQ();
    } else {
        return ["error" => "error in db"];
    }
}
function updateFAQ($faq)
{

    $con = getConnection();
    $sql = "update faq set question='{$faq['question']}', answer='{$faq['answer']}' where id={$faq['id']}";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return fetchFAQ();
    } else {
        return ["error" => "error in db"];
    }
}
function deleteFAQ($faq)
{

    $con = getConnection();
    $sql = "delete from faq where id={$faq['id']}";

    $result = mysqli_query($con, $sql);
    if ($result) {
        return fetchFAQ();
    } else {
        return ["error" => "error in db"];
    }
}
