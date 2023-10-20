<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'connect.php';

    session_start();

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }

    if(isset($_GET['deleteaccount'])){
        $id = $_GET['deleteaccount'];
    }

    $sql = "DELETE FROM trainee WHERE Tusername = '$id'";

    $removed = mysqli_query($CONNECT, $sql);

    if($removed){
        // echo "<script>alert('Application removed successfully!')</script>";
        header("location:logout.php");

    }
    else{
        echo "<script>alert('Application removal failed!')</script>";
    }



?>