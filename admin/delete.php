<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `registration` where id=$id";
        $conn->query($sql);
    }
    header('location:adminindex.php');
    exit;
?>