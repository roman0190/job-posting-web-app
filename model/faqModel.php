<?php
include_once("db.php");
function fetchFAQ()
{
    $con = getConnection();
    $sql = "select * from about";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $faqTexts = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($faqTexts, $row);
        }
        $text = $faqTexts[0]['about'];
        return $text;
    } else {
        return "No about page info found";
    }
}


function updateFAQ($faq)
{

    $con = getConnection();
    $sql = "select * from about";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $sql = "update about set about='{$faq}' where id=1";
    } else {
        $sql = "insert into about (id,about) values ('1','{$faq}')";
    }
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: ./aboutAdmin.php");
    } else {
        echo "error";
    }
}

?><html>

</html>