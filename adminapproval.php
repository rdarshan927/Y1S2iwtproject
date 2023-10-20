<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'connect.php';
    include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Aproval</title>
  
    <link rel="stylesheet" href="admin.css">

</head>
<body>

    <section class="user-all" id="section1">

        <h1 class="sectionheading"> Approve Job Requests </h1>
        
        <div class="pending">

            <div class="grid-container">
                <div class="grid-item-h">Application ID</div>
                <div class="grid-item-h2">Name</div>
                <div class="grid-item-h2">Phone number</div>
                <div class="grid-item-h2">Email</div>
                <div class="grid-item-h">Gender</div>
                <div class="grid-item-h">Degree</div>
                <div class="grid-item-h">Position</div>
                <div class="grid-item-h">Preferred time</div>
                <div class="grid-item-h">Job ID</div>
                <div class="grid-item-h">Application status</div>
                <div class="grid-item-h">Approve</div>
                <div class="grid-item-h">Remove</div>
            </div>

            <?php
                $sql = "SELECT * FROM jobapplication WHERE Application_status='pending'";

                $check = mysqli_query($CONNECT, $sql);

                if($check){
                    while($row = mysqli_fetch_assoc($check)){
                        $id = $row['Application_ID'];
                        $name = $row['Applicant_name'];
                        $phone = $row['Applicant_phone_no'];
                        $email = $row['Applicant_email'];
                        $gender = $row['Applicant_gender'];
                        $degree = $row['Applicant_degree'];
                        $position = $row['Applicant_position'];
                        $preferredtime = $row['Applicant_preferred_time'];
                        $jobid = $row['Job_ID'];
                        $applicationstatus = $row['Application_status'];

                        echo  '<div class="grid-container">
                                <div class="grid-item">'.$id.'</div>
                                <div class="grid-item2">'.$name.'</div>
                                <div class="grid-item2">'.$phone.'</div>
                                <div class="grid-item2">'.$email.'</div>
                                <div class="grid-item">'.$gender.'</div>
                                <div class="grid-item">'.$degree.'</div>
                                <div class="grid-item">'.$position.'</div>
                                <div class="grid-item">'.$preferredtime.'</div>
                                <div class="grid-item">'.$jobid.'</div>
                                <div class="grid-item">'.$applicationstatus.'</div>
                                <button class="grid-item" id="approve"><a href="applicationcontrol.php?approveid='.$id.'" class="buttona">Approve</a></button>
                                <button class="grid-item" id="remove"><a href="applicationcontrol.php?deleteid='.$id.'" class="buttona">Remove</a></button>
                               </div>';
                    }
                }
            ?>
        </div>

            <h1 class="sectionheading">Approved List</h1>

            <div class="pending">

                <div class="grid-container">
                    <div class="grid-item-h">Application ID</div>
                    <div class="grid-item-h2">Name</div>
                    <div class="grid-item-h2">Phone number</div>
                    <div class="grid-item-h2">Email</div>
                    <div class="grid-item-h">Gender</div>
                    <div class="grid-item-h">Degree</div>
                    <div class="grid-item-h">Position</div>
                    <div class="grid-item-h">Preferred time</div>
                    <div class="grid-item-h">Job ID</div>
                    <div class="grid-item-h">Application status</div>
                    <div class="grid-item-h">Suspend</div>
                    <div class="grid-item-h">Remove</div>
                </div>

                <?php
                    $sql = "SELECT * FROM jobapplication WHERE Application_status='Approved'";

                    $check = mysqli_query($CONNECT, $sql);

                    if($check){
                        while($row = mysqli_fetch_assoc($check)){
                            $id = $row['Application_ID'];
                            $name = $row['Applicant_name'];
                            $phone = $row['Applicant_phone_no'];
                            $email = $row['Applicant_email'];
                            $gender = $row['Applicant_gender'];
                            $degree = $row['Applicant_degree'];
                            $position = $row['Applicant_position'];
                            $preferredtime = $row['Applicant_preferred_time'];
                            $jobid = $row['Job_ID'];
                            $applicationstatus = $row['Application_status'];

                            echo  '<div class="grid-container">
                                    <div class="grid-item">'.$id.'</div>
                                    <div class="grid-item2">'.$name.'</div>
                                    <div class="grid-item2">'.$phone.'</div>
                                    <div class="grid-item2">'.$email.'</div>
                                    <div class="grid-item">'.$gender.'</div>
                                    <div class="grid-item">'.$degree.'</div>
                                    <div class="grid-item">'.$position.'</div>
                                    <div class="grid-item">'.$preferredtime.'</div>
                                    <div class="grid-item">'.$jobid.'</div>
                                    <div class="grid-item">'.$applicationstatus.'</div>
                                    <button class="grid-item" id="approve"><a href="applicationcontrol.php?suspendid='.$id.'" class="buttona">Suspend</a></button>
                                    <button class="grid-item" id="remove"><a href="applicationcontrol.php?deleteid='.$id.'" class="buttona">Remove</a></button>
                                </div>';
                        }
                    }
                ?>
            </div>

            <h1 class="sectionheading">Suspended List</h1>

            <div class="pending">

                <div class="grid-container">
                    <div class="grid-item-h">Application ID</div>
                    <div class="grid-item-h2">Name</div>
                    <div class="grid-item-h2">Phone number</div>
                    <div class="grid-item-h2">Email</div>
                    <div class="grid-item-h">Gender</div>
                    <div class="grid-item-h">Degree</div>
                    <div class="grid-item-h">Position</div>
                    <div class="grid-item-h">Preferred time</div>
                    <div class="grid-item-h">Job ID</div>
                    <div class="grid-item-h">Application status</div>
                    <div class="grid-item-h">Approve</div>
                    <div class="grid-item-h">Remove</div>
                </div>

                <?php
                    $sql = "SELECT * FROM jobapplication WHERE Application_status='suspended'";

                    $check = mysqli_query($CONNECT, $sql);

                    if($check){
                        while($row = mysqli_fetch_assoc($check)){
                            $id = $row['Application_ID'];
                            $name = $row['Applicant_name'];
                            $phone = $row['Applicant_phone_no'];
                            $email = $row['Applicant_email'];
                            $gender = $row['Applicant_gender'];
                            $degree = $row['Applicant_degree'];
                            $position = $row['Applicant_position'];
                            $preferredtime = $row['Applicant_preferred_time'];
                            $jobid = $row['Job_ID'];
                            $applicationstatus = $row['Application_status'];

                            echo  '<div class="grid-container">
                                    <div class="grid-item">'.$id.'</div>
                                    <div class="grid-item2">'.$name.'</div>
                                    <div class="grid-item2">'.$phone.'</div>
                                    <div class="grid-item2">'.$email.'</div>
                                    <div class="grid-item">'.$gender.'</div>
                                    <div class="grid-item">'.$degree.'</div>
                                    <div class="grid-item">'.$position.'</div>
                                    <div class="grid-item">'.$preferredtime.'</div>
                                    <div class="grid-item">'.$jobid.'</div>
                                    <div class="grid-item">'.$applicationstatus.'</div>
                                    <button class="grid-item" id="approve"><a href="applicationcontrol.php?approveid='.$id.'" class="buttona">Approve</a></button>
                                    <button class="grid-item" id="remove"><a href="applicationcontrol.php?deleteid='.$id.'" class="buttona">Remove</a></button>
                                </div>';
                        }
                    }
                ?>
            </div>

    </section>

</body>
</html>

<?php
      include 'footer.php';
?>
