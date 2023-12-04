<?php
include_once("db.php");
function fetchAbout()
{
    $con = getConnection();
    $sql = "select * from about";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $aboutTexts = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($aboutTexts, $row);
        }
        $text = $aboutTexts[0]['about'];
        return ['error' => false,  'data' => $text];
    } else {
        return ['error' => true,  'data' => "No texts saved."];
    }
}


function updateAbout($about)
{

    $con = getConnection();
    $sql = "select * from about";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $sql = "update about set about='{$about}' where id=1";
    } else {
        $sql = "insert into about (id,about) values ('1','{$about}')";
    }
    $result = mysqli_query($con, $sql);
    if ($result) {
        return fetchAbout();
    } else {
        return ['error' => true,  'data' => "Could not update in db"];
    }
}
