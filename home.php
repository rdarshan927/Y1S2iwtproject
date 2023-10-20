<?php
include("header.php");


?>

<br><br><br><br><br>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Training Reviews</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="welcome">
    <h2>Welcome to</h2>
    <h2>Online Teacher Trainer</h2>

    <div class="review" id="review">
        <span><a href="review.php">USER REVIEWS</a></span>
    </div>

    <?php

    if(!isset($_SESSION['username'])){
    echo '
    <div>
        <a href="login.php"><button class="sign">SIGN IN</button></a>
        <a href="register.php"><button class="sign">SIGN UP</button></a>
    </div>';
    }
    ?>
</div>
<div class="featured">
    <div class="featured-h">
        <h2 class="featured-h2">Featured Courses</h2>
        <div class="featured-img">

            <div class="course">
                <img src="home/iwt.jpeg" alt="IWT">
                    <p>IWT</p>
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<button id="enroll"><a href="course.php" class="enrollnow">ENROLL NOW</a></button>';
                        }
                        else{
                            echo '<button id="enroll" onclick="confirmLogin();" >ENROLL NOW</button>';
                        }
                    ?>
                    
            </div>

            <div class="course">
                <img src="home/isdm.jpeg" alt="ISDM">   
                    <p>ISDM</p>
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<button id="enroll"><a href="course.php" class="enrollnow">ENROLL NOW</a></button>';
                        }
                        else{
                            echo '<button id="enroll" onclick="confirmLogin();" >ENROLL NOW</button>';
                        }
                    ?>

            </div>

            <div class="course">
                <img src="home/ooc.jpeg" alt="OOC">   
                    <p>OOC</p>
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<button id="enroll"><a href="course.php" class="enrollnow">ENROLL NOW</a></button>';
                        }
                        else{
                            echo '<button id="enroll" onclick="confirmLogin();" >ENROLL NOW</button>';
                        }
                    ?>

            </div>
            <div class="course">
                <img src="home/spm.jpeg" alt="SPM">   
                    <p>SPM</p>
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<button id="enroll"><a href="course.php" class="enrollnow">ENROLL NOW</a></button>';
                        }
                        else{
                            echo '<button id="enroll" onclick="confirmLogin();" >ENROLL NOW</button>';
                        }
                    ?>

            </div>
            <div class="course">
                <img src="home/images.png" alt="EAP">   
                    <p>EAP</p>
                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<button id="enroll"><a href="course.php" class="enrollnow">ENROLL NOW</a></button>';
                        }
                        else{
                            echo '<button id="enroll" onclick="confirmLogin();" >ENROLL NOW</button>';
                        }
                    ?>

            </div>
        </div>
    </div>
</div>


        
 <div class="Our-Courses">
    <img src="home/study.jpeg" alt="Create your  Own Future.">
    <div class="description">
        <p>Your journey through our courses is your path to a brighter and more promising future.</p>
    </div>

    

</div>

    <script>
        function confirmLogin() {
            var confirmation = confirm("Are you sure? do you want to enroll to the course? Login to continue.");
            if (confirmation) {
                <?php echo 'window.location.href = "login.php";' ?> 
            } else {
                alert("Cacelled login.");
            }
        }
    </script>

        
</body>
</html>



<?php
include("footer.php");

?>
