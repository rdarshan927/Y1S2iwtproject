<?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'connect.php';

    include 'header.php';

    if(isset($_POST['submit'])){

        $APPLICANT_NAME = $_POST['applicant-name'];
        $APPLICANT_EMAIL = $_POST['applicant-email'];
        $APPLICANT_MOBILE = $_POST['applicant-mob'];
        $APPLICANT_POSITION = $_POST['applicant-p'];
        $APPLICANT_DEGREE = $_POST['applicant-degree'];
        $APPLICANT_GENDER = $_POST['applicant-g'];
        $APPLICANT_APPLIED = $_POST['applicant-applied'];
        $APPLICANT_PREFER = $_POST['applicant-prefer'];
        $APPLICANT_STATUS = 'pending';

        $sql = "INSERT INTO `jobapplication`(`Applicant_name`, `Applicant_phone_no`, `Applicant_email`, `Applicant_gender`, `Applicant_degree`, `Applicant_position`, `Applicant_preferred_time`, `Job_ID`, `Application_status`) 
        VALUES('$APPLICANT_NAME', '$APPLICANT_MOBILE', '$APPLICANT_EMAIL', '$APPLICANT_GENDER', '$APPLICANT_DEGREE', '$APPLICANT_POSITION', '$APPLICANT_PREFER', '$APPLICANT_APPLIED', 'pending')";

        $result = mysqli_query($CONNECT, $sql);

        if($result){
            echo "<script>alert('Application submitted successfully!')</script>";
        }
        else{
            echo "<script>alert('Application submission failed!')</script>";
        }
    } 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online teacher Trainer</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body id="body-sec">

        <section class="section-apply1" id="section1">
            <div class="apply">
                <div class="apply-in">
                    <h1 class="apply-head">Apply To Teach</h1>
                    <div class="apply-body">
                        <form method="POST">
                            <label for="applicant-name"> Applicant Name</label><br>
                            <input type="text" id="applicant-name" name="applicant-name" class="input-text" placeholder="Enter the Full Name" required/><br>

                            <label for="applicant-email">Applicant Email</label><br>
                            <input type="email" id="applicant-email" name="applicant-email" class="input-text" placeholder="Enter the Email address"  required/><br>

                            <label for="applicant-mob">Applicant Mobile Number</label><br>
                            <input type="text" id="applicant-mob" name="applicant-mob" class="input-text" placeholder="Enter the Mobile Number" pattern="[0-9]{10}" title="a valid number" required/><br>

                            <label for="applicant-p">Current Position</label><br>
                            <input type="text" id="applicant-p" name="applicant-p" class="input-text" placeholder="Enter the current job you are enrolled in" required/><br>

                            <label for="applicant-degree">Degree</label><br>
                            <select name="applicant-degree" id="applicant-degree" class="input-degree">
                                <option value="IT">Information Technology</option>
                                <option value="CS">Computer Science</option>
                                <option value="DS">Data Science</option>
                                <option value="SE">Software Engineering</option>
                                <option value="CYSE">Cyber Security</option>
                            </select><br>

                            <label for="applicant-g">Gender</label><br>
                            <div class="gender">
                                <span>Male</span>
                                <input type="radio" id="applicant-g" name="applicant-g" value="male" checked>

                                <span>Female</span>
                                <input type="radio" id="applicant-g" name="applicant-g" value="female">

                                <span>Other</span>
                                <input type="radio" id="applicant-g" name="applicant-g" value="other"><br>
                            </div>
                            
                            <label for="applicant-applied">Applied for</label><br>
                            <select name="applicant-applied" id="applicant-applied" class="input-degree">
                                <option value="IN1000">Instructor</option>
                                <option value="SP1000">Supervisor</option>
                            </select><br>

                            <label for="applicant-prefer">Prefer</label><br> 
                            <select name="applicant-prefer" id="applicant-applied" class="input-degree">
                                <option value="fulltime">Full-time</option>
                                <option value="parttime">Part-time</option>
                            </select><br>

                            <input type="checkbox" name="condition" class="condition" required>
                            <label for="condition">I confirm that above mentioned details are correct</label>
                            <div class="apply-btn-div">
                                <button type="submit" class="apply-btn" name="submit">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="apply-right">
                <div class="apply-right-in">
                    <div class="apply-right-in-end">
                        <h2>VIEW RECENT NOTICES Regarding application process!</h2>
                        <a href="#section2"><button>Click here</button></a>
                    </div>
                    <div class="apply-right-in-top">
                        <h2><span id="greeting"> </span>Welcome to our Online Instructor and Supervisor Application Platform!</h2>
                        <p>We're thrilled that you're considering joining our team of dedicated educators and leaders. Your passion and expertise are what make our community thrive, and we can't wait to learn more about you.</p>
                    </div>
                    <div class="apply-right-in-center">
                        <h2>Conditions</h2>
                        <img src="apply/navigate.png" alt="" name="navigate2" id="navigate2" onclick="conditionNav('navigate2')" class="navigate2">
                        <img src="apply/navigate.png" alt="" name="navigate1" id="navigate1" onclick="conditionNav('navigate1')" class="navigate1">
                        <h3 id="conH3">Education & Qualification</h3>
                        <ul>
                            <li id="conLi1"><span>Specialized Degrees: </span>You might require instructors to hold specialized degrees, 
                            like a Master's in Education or a relevant subject. These degrees indicate a deep understanding of teaching principles and subject matter knowledge.
                            </li>
                            <li id="conLi2"><span>Continuous Learning: </span>Consider instructors who are pursuing further education or professional development. 
                                This demonstrates a commitment to staying up-to-date and improving their teaching skills, which is crucial in the ever-changing educational landscape.
                            </li>
                        </ul>
                        <h3 id="con2H3">Teaching Experience</h3>
                        <ul>
                            <li id="conLi21"><span>Depth of Experience: </span>Consider not only the number of years but also the depth of experience. 
                                Instructors with a wide range of teaching experiences, such as in different grades, subjects, or types of schools, 
                                may bring valuable insights. This variety can enrich the training they provide.
                            </li>
                            <li id="conLi22"><span>Recent Experience: </span>While years of experience are important, also look at how recent their teaching experience is. 
                                Education is an evolving field, and instructors who have taught recently are more likely to be familiar with the latest teaching methods and technologies.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="right-images">
                <div class="apply-right-img">
                    <img src="apply/apply2.png" alt="">
                </div>
            </div>
            
        </section>

    <section class="section-apply2" id="section2">
        <div class="apply-notices">
            <h2>Notices</h2>
            <p><span>Welcome to our Notices section,</span><br><br> the hub for all essential updates and announcements tailored for our dedicated teachers. 
                Here, you'll find timely information about upcoming events, workshops, and training sessions to enrich your teaching journey. 
                We'll keep you in the loop with important deadlines, system updates, and emergency notifications. For your convenience, we've organized notices into clear categories, making it easy to find what you need. 
                Feel free to leave comments and questions to engage with our community, and check out our archive for a glimpse into the past. Your feedback matters, and we're here to ensure you have the support and information you need. 
                Stay connected, stay informed, and keep teaching with confidence!
            </p>
        </div>
        <div class="section-apply-right">
            <div class="apply-go-top">
                <h1>Apply Now!</h1>
                <a href="#section1"><button>Click here</button></a>
            </div>
            <div class="apply-go-top-down">
                <img src="apply/apply3.png" alt="">
            </div>
        </div>
        
    </section>



    <script src="apply.js"></script>
</body>
</html>

<?php
      include 'footer.php';
?>
