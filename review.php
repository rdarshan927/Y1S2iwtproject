<?php
error_reporting(E_ALL);
    ini_set('display_errors', 1);
include 'header.php';
include 'connect.php';

$SURNAME = "root";

if(isset($_POST['submit'])){
    $NAME=$_POST['name'];
    $RATING=$_POST['rating'];
    $REVIEWS=$_POST['review'];
                        
    $sql ="INSERT INTO `review`(`Name`, `Rating`, `Review`, `Tusername`) VALUES ('$NAME','$RATING','$REVIEWS','$SURNAME')";

    $DONE = mysqli_query($CONNECT,$sql);

    if($DONE){
        echo"<script>alert('REVIEW SUBMITTED')</script>";
    }
    else{

        echo"<script>alert('REVIEW SUBMIT FAILED')</script>";
    }


}




?>


<br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Training Review Page</title>
    <link rel="stylesheet" type="text/css" href="review.css">
   
</head>
<br><br>

<body>
    <h1>Teacher Training Reviews</h1>
    <div class="content">
        <div class="container">
            <h2>Submit a Review</h2>
            <br><br><br>

            <form  method="POST">
                <label for="name">Your Name:</label><br>
                <input type="text" id="name" name="name" required class="inputfield"><br><br>
                
                <label for="rating">Rating (1-5):</label><br>
                <input type="number" id="rating" class="rating" name="rating" min="1" max="5" required><br><br><br>
                
                <label for="comment">Review:</label><br><br>
                <textarea id="comment" rows="4"  cols="33.5" name="review" required></textarea><br>
                
                <button class="submit" name="submit">Submit</button>
            </form>
            
            <br><br><br><br><br><br>

            
            <h2>Latest Reviews</h2>

            <?php

                $sqlread="SELECT * FROM `review` WHERE `Tusername` = '$USERNAME' ORDER BY `reviewid` DESC ";
                $readsuccess= mysqli_query($CONNECT, $sqlread);

                $count =1;

                while($row= mysqli_fetch_assoc($readsuccess)){
                    $name=$row['Name'];
                    $rating=$row['Rating'];
                    $review=$row['Review'];
                    $reviewid=$row['reviewid'];

                    if($count == 1){
                        $newname = $name;
                        $newrating = $rating;
                        $newreview = $review;
                        $newreviewid = $reviewid;
                    }

                    echo '
                    <div class="review">
                    <p><strong> Name: '.$name.'</strong></p>
                    <p>Rating:'.$rating.' </p>
                    <p>Description: '.$review.'</p>
                    <button class="deletebtn" id="deletereview"><a href="reviewdelete.php?deletereview='.$reviewid.'">Delete</a></button>
                </div>';

                if($count == 5){
                    break;


                }
                $count++;




                }
                ?>

                <form method="POST" class="editq">
                    <span class="questions">Edit <?php echo $newreviewid ?> Review - <input type="text" name="edited" class="edit" value="<?php echo $newreview ?>"></span><br>
                    <span>(click on the last submitted review to edit)</span>
                    <?php echo '<button class="deletebtn" id="deletereview"><a href="reviewdelete.php?deletereview='.$newreviewid.'">Delete</a></button>'; ?>
                    <button class="editbtn" id="deletereview" name="editsubmit">Edit</button>
            </form>

            <?php

            if(isset($_POST['editsubmit'])){
                $N=$_POST['edited'];

                $sql = "UPDATE `review` SET `review`='$N' WHERE `reviewid` = '$newreviewid'";

                

                $result=mysqli_query($CONNECT,$sql);

                        if($result){
                            // echo"<script>alert('stored successfully!')</script>";
                            header("location:review.php");
                        }
                        else{
                            echo"<script>alert('Editing failed!')</script>";
                        }

                }

            ?>

        </div>

       
        <div class="right">
            <img src="review/new.jpeg" alt="Teacher Training Image"> <br><br><br><br>
        </div>
    </div>
</body>


</html>


<?php
include("footer.php");

?>
