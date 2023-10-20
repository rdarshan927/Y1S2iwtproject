<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'header.php';
    include 'connect.php';

    if(isset($_GET['username'])){
        $username = $_GET['username'];
    }

    $sql = "SELECT * FROM `trainee` WHERE `Tusername` = '$username'";
    $output = mysqli_query($CONNECT, $sql);

    if($output){
        while($row = mysqli_fetch_assoc($output)){
            $DUPfname = $row['Tfirstname'];
            $DUPlname = $row['Tlastname'];
            $DUPmobile = $row['Tmobile'];
            $DUPemail = $row['Temail'];
            $DUPgender = $row['Tgender'];
            $DUPschool = $row['Tschool'];
            $DUPschoolissuedid = $row['Tschoolissued_ID'];
            $DUPlocation = $row['Tlocation'];
            $DUPaddress = $row['Taddress'];
            $DUPbio = $row['Tbio'];
            $DUPprofile = $row['Tprofile'];
        }
    }

    if(isset($_POST['submit'])){
        $firstname = $_POST['Tfirstname'];
        $lastname = $_POST['Tlastname'];
        $gender = $_POST['gender'];
        $school = $_POST['Tschool'];
        $location = $_POST['Tlocation'];
        $email = $_POST['Temail'];
        $mobile = $_POST['Tmobile'];
        $schoolid = $_POST['Tschoolissuedid'];
        $address = $_POST['Taddress'];
        $bio = $_POST['Tbio'];



        if($_FILES["image"]["error"] === 4){
            echo "<script> alert('Image does not exist'); </script>";
        }

        else {
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if(!in_array($imageExtension, $validImageExtension)){
                echo "<script> alert('Invalid Image Extension'); </script>";
            }

            else if($fileSize > 100000000){
                echo "<script> alert('Image Size is Large'); </script>";
            }

            else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'profile/' . $newImageName);
            }
        }

        $firstname = !empty($firstname) ? $firstname : $DUPfname;
        $lastname = !empty($lastname) ? $lastname : $DUPlname;
        $mobile = !empty($mobile) ? $mobile : $DUPmobile;
        $email = !empty($email) ? $email : $DUPemail;
        $gender = !empty($gender) ? $gender : $DUPgender;
        $school = !empty($school) ? $school : $DUPschool;
        $schoolid = !empty($schoolid) ? $schoolid : $DUPschoolissuedid;
        $location = !empty($location) ? $location : $DUPlocation;
        $address = !empty($address) ? $address : $DUPaddress;
        $bio = !empty($bio) ? $bio : $DUPbio;
        $newImageName = !empty($newImageName) ? $newImageName : $DUPprofile;

        $sqlup = "UPDATE trainee SET Tfirstname = '$firstname', Tlastname = '$lastname', Tmobile = '$mobile', Temail = '$email', Tgender = '$gender', Tschool = '$school', Tschoolissued_ID = '$schoolid', Tlocation = '$location', Taddress = '$address', Tbio = '$bio', Tprofile = '$newImageName' WHERE Tusername = '$username'";

        $resultup = mysqli_query($CONNECT, $sqlup);

    
    
        if($resultup){
            header("location:useraccount.php");
        }
    }

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

    <form method="POST" enctype="multipart/form-data">
        <div class="user-about">
            <div class="user-name">
                <div class="user-name-in">
                    <img src="profile/<?php echo $DUPprofile ?>" height="150px" width="150px" alt="">
                    <div class="user-name-in-1">

                        <p><textarea id="bio" name="Tbio" rows="4" cols="80" class="bio"><?php echo $DUPbio; ?></textarea></p>
                        <div class="user-edit-pic">
                            <label for="image">Upload profile</label>
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="">
                        </div>
                    </div>
                </div>

                <div class="user-resource">
                    <button name="submit" >Done Editing</button>
                </div>
            </div>

            <div class="user-detail">
                <div class="user-detail-left">
                    <span class="user-detail-up">First Name</span>
                    <input type="text" name="Tfirstname" class="inputfield" value="<?php echo $DUPfname; ?>" required>
                    <span class="user-detail-up">username</span>
                    <?php echo "$username"?>
                    <span class="user-detail-up">Gender</span>
                    <div class="gender">
                                <span>Male</span>
                                <input type="radio" id="applicant-g" name="gender" value="male" checked>

                                <span>Female</span>
                                <input type="radio" id="applicant-g" name="gender" value="female">

                                <span>Other</span>
                                <input type="radio" id="applicant-g" name="gender" value="other"><br>
                            </div>
                    <span class="user-detail-up">School</span>
                    <input type="text" name="Tschool" class="inputfield" value="<?php echo $DUPschool; ?>">
                    <span class="user-detail-up">Location</span>
                    <input type="text" name="Tlocation" class="inputfield" value="<?php echo $DUPlocation; ?>">
                </div>
                <div class="user-detail-right">
                    <span class="user-detail-up">Last Name</span>
                    <input type="text" name="Tlastname" class="inputfield" value="<?php echo $DUPlname; ?>">
                    <span class="user-detail-up">Email ID</span>
                    <input type="text" name="Temail" class="inputfield" value="<?php echo $DUPemail; ?>" required>
                    <span class="user-detail-up">Phone Number</span>
                    <input type="text" name="Tmobile" class="inputfield" value="<?php echo $DUPmobile; ?>" pattern="[0-9]{10}" required>
                    <span class="user-detail-up">School issued Id</span>
                    <input type="text" name="Tschoolissuedid" class="inputfield" value="<?php echo $DUPschoolissuedid; ?>">
                    <span class="user-detail-up">Address</span>
                    <input type="text" name="Taddress" class="inputfield" value="<?php echo $DUPaddress; ?>">
                </div>
            </div>
        </div>
     </form>
    </section>

</body>
</html>

<?php
      include 'footer.php';
?>
