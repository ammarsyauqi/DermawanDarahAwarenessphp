<?php
require 'C:\xampp\htdocs\fyp\config.php';//id session start 

$servername = "localhost";
$username = "root";
$password = "";

$lnk = mysqli_connect($servername, $username, $password);
if (!$lnk)
    die("Database connection failed");

mysqli_select_db($lnk, "dermawan") or die("Failed to select database");



//TEST RESULT
/*
$info = array(
    "username" => "sensei",
    "quiz_score" => 15,
);
if (addQuizscore($info, $lnk)) {
    echo "Score inserted";
} else {
    echo "Insertion failed";
}
$result = getQuizscore($lnk);
echo json_encode($result);*/

//quiz add NEW function to store
/*function addQuizscore($info, $lnk)
{
    $query = "INSERT INTO highscore (username, quiz_score) VALUES " .
        "('" . $info["username"] . "','" . $info["quiz_score"] . "')";

    $rs = mysqli_query($lnk, $query);
    if (!$rs) {
        return false;
    }
    return true;
}*/


//UPDATE TEST RESULT
/*$info = array(
    "username" => "ammar",
    "quiz_score" => 60,
);*/
$result = updateQuizscore($info["id"], $info["quiz_score"], $lnk);
return $result;


if (updateQuizscore($info ["id"], $info ["quiz_score"], $lnk)) {
    echo "Score updated";
} else {
    echo "Update failed";
}

/*$result = getQuizscore($lnk);
echo json_encode($result);*/

/*$result = updateQuizscore($info["username"], $info["quiz_score"], $lnk);
return $result;*/

function updateQuizscore($username, $quiz_score, $lnk)
{
    $username = mysqli_real_escape_string($lnk, $username); // Escape username to prevent SQL injection
    $quiz_score = intval($quiz_score); // Convert score to integer to prevent SQL injection

    // Assuming username is unique, you can use it in the WHERE clause
    $query = "UPDATE highscore SET quiz_score = $quiz_score WHERE username = '$username'";

    $rs = mysqli_query($lnk, $query);
    if (!$rs) {
        return false;
    }
    return true;
}



//quiz get function to store
function getQuizscore($lnk)
{
    $query = "SELECT id, username, quiz_score FROM highscore";
    $rs = mysqli_query($lnk, $query);

    $results = array();
    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            array_push($results, $row);
        }
    }
    return $results;
}

?>
