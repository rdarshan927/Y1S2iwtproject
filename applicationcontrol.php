<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'connect.php';

    if(isset($_GET['approveid'])){
        $id = $_GET['approveid'];

        $sql = "UPDATE jobapplication SET Application_status='Approved' WHERE Application_ID = '$id' AND (Application_status='pending' OR Application_status='suspended')";

        $removed = mysqli_query($CONNECT, $sql);

        if($removed){
            header("location:adminapproval.php");
        }
        else{
            echo "<script>alert('Application removal failed!')</script>";
        }
    }

    






    if(isset($_GET['suspendid'])){
        $id = $_GET['suspendid'];

        $sql = "UPDATE jobapplication SET Application_status='suspended' WHERE Application_ID = '$id' AND Application_status='Approved'";

        $removed = mysqli_query($CONNECT, $sql);

        if($removed){
            // echo "<script>alert('Application removed successfully!')</script>";
            header("location:adminapproval.php");
        }
        else{
            echo "<script>alert('Application removal failed!')</script>";
        }
    }









    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM jobapplication WHERE Application_ID = '$id'";

        $removed = mysqli_query($CONNECT, $sql);

        if($removed){
            // echo "<script>alert('Application removed successfully!')</script>";
            header("location:adminapproval.php");
        }
        else{
            echo "<script>alert('Application removal failed!')</script>";
        }
    }

    





?>

