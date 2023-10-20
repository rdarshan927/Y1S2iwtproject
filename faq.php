<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

      include 'header.php';
      include 'connect.php';

      if(isset($_SESSION['username'])){
        $USERNAME = $_SESSION['username'];
      }

      if(isset($_POST['submit'])){
        $FAQ_QUESTION=$_POST['question'];

        $sql = "INSERT INTO `faq`(`question`, `Tusername`) VALUES ('$FAQ_QUESTION', '$USERNAME')";

        $result=mysqli_query($CONNECT,$sql);

                if($result){
                    header("location:faq.php");
                }
                else{
                    echo"<script>alert('Store failed!')</script>";
                }

      }

      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="faq.css">
</head>
<body>

        
    <section class="sectionnew"> 
        <div class="new">
            
            <div class="container">

                <div class="newform">


                    <div class="form"> 
                        <h1>Frequently Asked Questions (FAQ) </h1>
                    </div> 

                    <br>

                    <div class="form-group">
                        <form method="POST">

                            <label for="Question">Ask a question - <?php echo "$USERNAME" ?></label><br>
                            <input type="text" id="Question" placeholder="Type your question here"class="font"  name="question"><br><br>

                            <div class="buttons">
                                
                                    <button class="submit" name="submit">Submit</button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>

        <div class="section2">
            <h2 class= "fontsize">My Questions</h2>
            
            

        <?php

        $sqlread = "SELECT * FROM `faq` WHERE `Tusername` = '$USERNAME' ORDER BY `faqid` DESC";
        $readsuccess = mysqli_query($CONNECT, $sqlread);

        $count = 1;

        while($row = mysqli_fetch_assoc($readsuccess)){
            $entryID = $row['faqid'];
            $FAQ_QUESTION = $row['question'];
            $FAQ_USERNAME = $row['Tusername'];

            if($count == 1){
                $new = $entryID;
                $newq = $FAQ_QUESTION;
                $enwcount = $count;

            }

            echo '
            <span class="questions"> '.$entryID.' - Question - '.$FAQ_QUESTION.'</span><br>
            <div class="faqr">
            <p class="username">by :-'.$FAQ_USERNAME.'</p><br>
            <button class="deletebtn" id="deletefaq"><a href="faqdelete.php?deletefaq='.$entryID.'">Delete</a></button>
            </div>
            ';

            if($count == 5){
                break;
            }

            $count++;
        }
        
        ?>

        <form method="POST" class="editq">
                <span class="questions">Edit <?php echo $new ?> Question - <input type="text" name="edited" class="edit" value="<?php echo $newq ?>"></span><br>
                <span>(click on the last submitted question to edit)</span>
                <?php echo '<button class="deletebtn" id="deletefaq"><a href="faqdelete.php?deletefaq='.$new.'">Delete</a></button>'; ?>
                <button class="deletebtn" id="deletefaq" name="editsubmit">Edit</button>
        </form>

        <?php

        if(isset($_POST['editsubmit'])){
        $N=$_POST['edited'];

        $sql = "UPDATE `faq` SET `question`='$N' WHERE `faqid` = '$new'";

        

        $result=mysqli_query($CONNECT,$sql);

        if(!$result){
            echo"<script>alert('Store failed!')</script>";
        }

      }

      ?>

            
            
        </div>
    </div>
 <div>
            




<div class="sectionall">
            <h2 class= "fontsize">Users Previous Questions</h2>
            
            

        <?php

        $sqlread = "SELECT * FROM `faq` ORDER BY `faqid` DESC";
        $readsuccess = mysqli_query($CONNECT, $sqlread);

        $count = 1;

        while($row = mysqli_fetch_assoc($readsuccess)){
            $entryID = $row['faqid'];
            $FAQ_QUESTION = $row['question'];
            $FAQ_USERNAME = $row['Tusername'];

            // if($count == 1){
            //     $new = $entryID;
            //     $newq = $FAQ_QUESTION;
            //     $enwcount = $count;

            // }

            echo '
            <span class="questions"> '.$entryID.' - Question - '.$FAQ_QUESTION.'</span><br>
            <div class="faqr">
            <p class="username">by :-'.$FAQ_USERNAME.'</p><br>
            
            </div>
            ';

            if($count == 15){
                break;
            }

            $count++;
        }
        
        ?>



            
            
        </div>
    </div>

 </div>

    </section>


</body>
</html>

<?php
      include 'footer.php';
?>
