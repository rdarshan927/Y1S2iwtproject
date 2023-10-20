<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'connect.php';

    session_start();

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $logout = "LOGOUT";
    }
    else{
        $logout = "LOGIN";
    }

    $username = isset($username) ? $username : "GUEST";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
</head>
<body>
<header>
    <nav class="header">
        <span class="logo-top">Online Teacher Trainer</span>
        <ul class="navigation">
            <li class="nav-top"><a href="home.php" class="nav-top-a">HOME</a></li>
            <li class="nav-top"><a href="course.php" class="nav-top-a">COURSES</a></li>
            <li class="nav-top"><a href="about.php" class="nav-top-a">ABOUT</a></li>
            <li class="nav-top"><a href="contactus.php" class="nav-top-a">CONTACT</a></li>
            <li class="nav-top" id="apply"><a href="apply.php" class="nav-top-a">APPLY TO TEACH <span class="count">99+</span></a></li>
        </ul>

        <div class="rightside-container">
            <?php

                $admin = "SELECT * FROM admin WHERE Ausername = '$username'";
                $check = mysqli_query($CONNECT, $admin);
                $row = mysqli_num_rows($check);

                if ($row == 1) {
                    echo '<a href="adminapproval.php" class="account-top">'.$username.'</a>';
                } else {
                    echo '<a href="useraccount.php" class="account-top">'.$username.'</a>';
                }
            ?>


            
            <a href="logout.php" class="account-top2"><?php echo "$logout" ?></a>
        </div>
    </nav>
</header>

<script>
    //console.log("Script is running.");
    document.querySelectorAll('.nav-top-a').forEach(link => {
        if(link.href === window.location.href){
            link.setAttribute('aria-current', 'page')
        }
    });

    //console.log("Script is running.");
    document.querySelectorAll('.account-top').forEach(link => {
        if(link.href === window.location.href){
            link.setAttribute('aria-current', 'page')
        }
    });
</script>
</body>
</html>
