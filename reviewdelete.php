<?php

    include 'connect.php';

    if(isset($_GET['deletereview'])){
        $id = $_GET['deletereview'];
    }

    $sql = "DELETE FROM review WHERE reviewid = '$id'";

    $removed = mysqli_query($CONNECT, $sql);

    if($removed){
        header("location:review.php");
    }
    else{
        echo "<script>alert('Application removal failed!')</script>";
    }

?>
