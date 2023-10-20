<?php

    include 'header.php';
    include 'connect.php';

    // session_start();

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM trainee WHERE Tusername = '$username' AND Tpassword = '$password' ";
        $sqladmin = "SELECT * FROM admin WHERE Ausername = '$username' AND Apassword = '$password' ";

        $result = mysqli_query($CONNECT, $sql);
        $resultadmin = mysqli_query($CONNECT, $sqladmin);

        if($result){
            $row = mysqli_num_rows($result);

            if($row == 1){
                $_SESSION['username'] = $username;
                header("location: useraccount.php");
            }
            else{
                if($resultadmin){
                    $row = mysqli_num_rows($resultadmin);

                    if($row == 1){
                        $_SESSION['username'] = $username;
                        echo "<script>alert('Login successful!')</script>";
                        header("location: adminapproval.php");
                    }
                    else{
                        $success = 'Login failed!';
                        header("location: login.php?message=failed");
                    }
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="login.css">    
    </head>
        

    <body>
      <div class="box">
        <form action="#" method="POST" class="container">
            <?php
                if(isset($_GET['message'])){
                    echo "<script>alert('Login failed!')</script>";
                }
            ?>
           <h1>Login</h1>
              
            <label for="UserName"><b> UserName</b></label>

            <div class="input-box">
              <input type="text" class="uu" placeholder="Enter UserName" id="UserName" name="username" required>
            </div> <br><br>
              
            <label for="psw"><b> Password</b></label>

            <div class="input-box">
              <input type="password" class="uu" placeholder="Enter Password" id="psw" name="password" required><br>
            </div>
                
            <a class="forgetpw" href="**">Forgot Password ?</a><br><br>
              
                
            <button class="buto" type="submit" class="btn" name="submit">Login</button>

            <div class="dont-acc">
              <p>Don't have a account? <a href="register.php">Register</a></p>
            </div>
                  
        </form>

             <div class="immg" >
                  <img src="login/log.png" height="400px "width="400px" >
                </div>
            </div>

</div>
        </body>


</html> 

<?php
      include 'footer.php';
?>
