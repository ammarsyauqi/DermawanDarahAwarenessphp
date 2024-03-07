<?php

require 'C:\xampp\htdocs\fyp\config.php';

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dermawan";

$lnk = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (!$lnk) {
    die("Database connection failed");
}

function updateQuizscore($id, $quiz_score, $lnk)
{
    $id = mysqli_real_escape_string($lnk, $id);
    $quiz_score = intval($quiz_score);
    
    // Update highscore set quiz_score = $quiz_score where id = '$id'
    $query = "UPDATE highscore SET quiz_score = $quiz_score WHERE id = '$id'";
    
    $rs = mysqli_query($lnk, $query);
    
    if (!$rs) {
        return false;
    }
    
    return true;
}

// Check if session ID exists and quiz score is provided
if (isset($_SESSION["id"]) && isset($_POST["quiz_score"])) {
    $id = $_SESSION["id"];
    $quiz_score = $_POST["quiz_score"];
    
    if (updateQuizscore($id, $quiz_score, $lnk)) {
        //echo "Score updated";
    } else {
        //echo "Update failed";
    }
} else {
    //echo "Session ID or quiz score not provided";
}
?>
