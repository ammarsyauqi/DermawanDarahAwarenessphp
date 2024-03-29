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

function updatePuzzlescore($id, $puzzle_score, $lnk)
{
    $id = mysqli_real_escape_string($lnk, $id);
    $puzzle_score = intval($puzzle_score);
    
    // Update highscore set puzzle_score = $puzzle_score where id = '$id'
    $query = "UPDATE highscore SET puzzle_score = $puzzle_score WHERE id = '$id'";
    
    $rs = mysqli_query($lnk, $query);
    
    if (!$rs) {
        return false;
    }
    
    return true;
}

// Check if session ID exists and quiz score is provided
if (isset($_SESSION["id"]) && isset($_POST["puzzle_score"])) {
    $id = $_SESSION["id"];
    $puzzle_score = $_POST["puzzle_score"];
    
    if (updatePuzzlescore($id, $puzzle_score, $lnk)) {
        //echo "Score updated";
    } else {
        //echo "Update failed";
    }
} else {
    //echo "Session ID or quiz score not provided";
}
?>
