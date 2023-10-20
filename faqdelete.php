<?php

    include 'connect.php';

    if(isset($_GET['deletefaq'])){
        $id = $_GET['deletefaq'];
    }

    $sql = "DELETE FROM faq WHERE faqid = '$id'";

    $removed = mysqli_query($CONNECT, $sql);

    if($removed){
        header("location:faq.php");
    }
    else{
        echo "<script>alert('Application removal failed!')</script>";
    }

?>