<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

  include'header.php';
  include'connect.php';

  if(isset($_POST['register'])){
        $REGISTER_FIRSTNAME=$_POST['first_name'];
        $REGISTER_LASTNAME=$_POST['last_name'];
        $REGISTER_USERNAME=$_POST['username'];
        $REGISTER_EMAIL=$_POST['email'];
        $REGISTER_GENDER=$_POST['gender'];
        $REGISTER_PASSWORD=$_POST['password'];
        $REGISTER_CONFIRMPASSWORD=$_POST['confirm-password'];

        // Check for duplicate username
        $checkUsernameQuery = "SELECT * FROM trainee WHERE Tusername = '$REGISTER_USERNAME'";
        $resultUsername = mysqli_query($CONNECT, $checkUsernameQuery);

        // Check for duplicate email
        $checkEmailQuery = "SELECT * FROM trainee WHERE Temail = '$REGISTER_EMAIL'";
        $resultEmail = mysqli_query($CONNECT, $checkEmailQuery);

        // Check if passwords match
        if($REGISTER_PASSWORD===$REGISTER_CONFIRMPASSWORD){

            if (mysqli_num_rows($resultUsername) > 0) {
                echo"<script>alert('User name already exists!')</script>";
            }
            elseif (mysqli_num_rows($resultEmail) > 0) {
                echo"<script>alert('Email already exists!')</script>";
            }
            else {
                // Insert the new user into the database
               
                $sql="INSERT INTO `trainee`(`Tfirstname`, `Tlastname`, `Tusername`, `Temail`, `Tgender`, `Tpassword`) VALUES ('$REGISTER_FIRSTNAME','$REGISTER_LASTNAME','$REGISTER_USERNAME','$REGISTER_EMAIL','$REGISTER_GENDER','$REGISTER_PASSWORD')";

                $result=mysqli_query($CONNECT,$sql);

                if($result){
                    
                    header("location:login.php");
                }
                else{
                    echo"<script>alert('Registration failed!')</script>";
                }
            }
        }


        else{
            
            echo"<script>alert('Password do not match!')</script>";
        }
            
            
        
    }

            
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <section class="section1"> 
            <div class="content">
            

                <div class="box-form">
                        <h1 class="register">Register</h1>
                    <div class="center">
                       <div class="form-group">
                           <form method="POST">
                                <label for="first-name">First Name</label><br>
                                <input  type="text" id="first-name" placeholder="Enter your first name" name = "first_name" class="font"maxlength="20" required/><br><br>
                    
            
                                <label for="last-name">Last Name</label><br>
                                <input type="text" id="last-name" placeholder="Enter your last name"name="last_name"class="font"maxlength="20" required/><br><br>
            
            
                                <label for="username">Username</label><br>
                                <input type="text" id="username" placeholder="Enter the username"name="username"class="font"maxlength="20" required/><br><br>
                
                
                                <label for="email">Email</label><br>
                                <input type="email" id="email" placeholder="Enter the email address"name="email"class="font"maxlength="30" required/><br><br>
            
            
                                <label>Gender</label><br>
                                <input type="radio" name="gender" value="Male" checked> Male
                                <input type="radio" name="gender" value="Female" > Female<br><br>
            
            
                                <label for="password">Password</label><br>
                                <input type="password" id="password" placeholder="Enter the password"name="password"class="font"  required/><br><br>
                        
            
                                <label for="confirm-password">Confirm Password</label><br>
                                <input type="password" id="confirm-password" placeholder="Re-enter the password"name="confirm-password"class="font" required/><br><br>
            
                
                                 <input type="checkbox" id="terms" value="accepted"required>
                                 <label for="terms">Accept terms and conditions</label><br><br>
                
                        </div>
                               <button class="button" name="register">Register</button><br>
                               <a href="login.php" class = "account">Already Have an Account</a>
                            </form>
                    </div>
                </div>

                <div class="section2">
                    <div >
                        <img src="RegisterImages/teac.jpeg" alt="picture" class="section2image">
                    </div>     
                        <div>
                            <h2 class="topic">BEST ONLINE LEARNING SYSTEM</h2><br>
                               <p class="description">Looking to enhance your knowledge and skills from the comfort of your home? 
                                 Explore our curated selection of the finest
                                 online learning platforms that offer a wide range of courses. 
                                 Whether you're interested in professional 
                                 development, or academic advancement,
                                 our platform provide top-quality education
                                 with flexible schedules. 
                                 Start your learning journey today!
                               </p>
                        </div>
                    </div>
        </section>

    </body>
</html>



<?php
  include'footer.php';
?>

