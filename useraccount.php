<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'connect.php';
    include 'header.php';

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    else{
        header("location: login.php");
    }

    $sql = "SELECT * FROM `trainee` WHERE `Tusername` = '$username'";

    $output = mysqli_query($CONNECT, $sql);

    if($output){
        while($row = mysqli_fetch_assoc($output)){
            $userid = $row['Trainee_ID'];
            $firstname = $row['Tfirstname'];
            $lastname = $row['Tlastname'];
            $username = $row['Tusername'];
            $mobile = $row['Tmobile'];
            $email = $row['Temail'];
            $gender = $row['Tgender'];
            $school = $row['Tschool'];
            $schoolissuedid = $row['Tschoolissued_ID'];
            $location = $row['Tlocation'];
            $address = $row['Taddress'];
            $bio = $row['Tbio'];
            $profile = $row['Tprofile'];
        }
    }
    else{
        echo "0 results";
    }

    $userid = isset($userid) ? $userid : "";
    $firstname = isset($firstname) ? $firstname : "";
    $lastname = isset($lastname) ? $lastname : "";
    $username = isset($username) ? $username : "";
    $mobile = isset($mobile) ? $mobile : "";
    $email = isset($email) ? $email : "";
    $gender = isset($gender) ? $gender : "";
    $school = isset($school) ? $school : "";
    $schoolissuedid = isset($schoolissuedid) ? $schoolissuedid : "";
    $location = isset($location) ? $location : "";
    $address = isset($address) ? $address : "";
    $bio = isset($bio) ? $bio : "";
    $profile = isset($profile) ? $profile : "guest.png";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
  
    <link rel="stylesheet" href="useraccount.css">

</head>
<body>

    <section class="user-all" id="section1">
        
        <?php
            include 'useraccountnav.php';
        ?>

        <div class="user-about">
            <div class="user-name">
                <div class="user-name-in">
                    <img src="profile/<?php echo $profile ?>" height="150px" width="150px" alt="">
                    <div class="user-name-in-1">
                        
                        <h3><?php echo "$firstname $lastname"?></h3>
                        <p><?php echo "$bio"?></p>
                        
                    </div>
                </div>

                <div class="user-resource">
                    <button>Visit Resource Page</button>
                    <button>Manage Resource Page</button>
                </div>
            </div>

            <div class="user-detail">
                <div class="user-detail-left">
                    <?php
                        echo '<span class="user-detail-up">First Name</span>
                    <span class="user-detail-down">'.$firstname.'</span>
                    <span class="user-detail-up">username</span>
                    <span class="user-detail-down">'.$username.'</span>
                    <span class="user-detail-up">Gender</span>
                    <button>'.$gender.'</button>
                    <span class="user-detail-up">School</span>
                    <span class="user-detail-down">'.$school.'</span>
                    <span class="user-detail-up">Location</span>
                    <span class="user-detail-down">'.$location.'</span>';
                    ?>
                </div>
                <div class="user-detail-right">
                    <?php
                        echo '<span class="user-detail-up">Last Name</span>
                    <span class="user-detail-down">'.$lastname.'</span>
                    <span class="user-detail-up">Email ID</span>
                    <span class="user-detail-down">'.$email.'</span>
                    <span class="user-detail-up">Phone Number</span>
                    <span class="user-detail-down">'.$mobile.'</span>
                    <span class="user-detail-up">School issued Id</span>
                    <span class="user-detail-down">'.$schoolissuedid.'</span>
                    <span class="user-detail-up">Address</span>
                    <span class="user-detail-down">'.$address.'</span>';
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
