<?php
    include 'header.php';

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    else{
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
        <link rel = "stylesheet" type="text/css" href="course.css">
</head>

<body>
         
    <div class = "top-bar" >
        <div class= "search_c">Search courses</div>
            <div>
                <input class = "searchbox" type = "text" placeholder = "Enter course name">
            </div>
            <div class = "fil">
                <p class ="filter"><button class= "filter_button">Filter</button></p>
                <img class =  "filter_img " src="course/filter.jpeg">
            </div>
            <div>
                <button class = "enrolled">Enrolled courses</button>
            </div>
            <div>
                <button class = "starred">starred courses</button>
            </div>
        </div>
   

        <div class="course">
       
            <img class = "course-img" src= "course/image 1.jpeg" alt="Course 1 Image">
        
            <div class = "content ">
                <h2 class = "title"> Business Leadership and Strategy for Educators</h2>
                <p class ="description" > In this comprehensive online teacher training course, educators will explore the world of business 
                    leadership and strategy. Gain valuable insights into effective management techniques, strategic planning, and decision-making
                    processes. Discover how to apply these principles to educational settings, empowering you to lead your institution with 
                    confidence and purpose.</p>
            </div>
    
            <div class= "buttons">
                <div>
                    <button class = "view" > View Content </button>
                </div>
            <div>
                <button class= "enroll"> Enroll now </button>
            </div>
        </div>
        <div>
          <button id = "star1">star</button>
        </div>
    </div>

    <div class="course">
        <img class = "course-img" src="course/image 2.jpeg" alt="Course 2 Image">
            <div class = "content ">
                <h2 class = "title">EdTech Integration and Classroom Management</h2>
                <p class ="description" > Stay ahead of the curve with our "EdTech Integration and Classroom Management" course. Equip yourself
                    with the knowledge and skills to effectively integrate technology into your teaching practices. Learn strategies for managing
                    digital classrooms, fostering student engagement, and leveraging IT resources to enhance the learning experience.</p>
            </div>
    
        <div class= "buttons">
            <div>
                <button class = "view" > View Content </button>
            </div>
            <div>
                <button class= "enroll"> Enroll now </button>
            </div>
        </div>
        <div>
            <button id = "star2">star</button>
        </div>
    </div>

    <div class="course">
        <img class = "course-img" src="course/image 3.jpeg" alt="Course 3 Image">
        <div class = "content ">
            <h2 class = "title">Project Management in Education</h2>
            <p class ="description" >Project management is an essential skill for educators overseeing various initiatives and curricular
                 developments. Join our course to learn project planning, execution, and evaluation techniques specific to the education 
                 sector. Gain insights into managing educational projects efficiently, from curriculum redesign to 
                 infrastructure improvements.</p>
        </div>
    
        <div class= "buttons">
            <div>
                <button class = "view" > View Content </button>
            </div>
            <div>
                <button class= "enroll"> Enroll now </button>
            </div>
        </div>
        <div>
            <button id = "star3">star</button>
        </div>
    </div>

    <div class="course">
        <img class = "course-img" src="course/image 4.jpeg" alt="Course 4 Image">
        <div class = "content ">
            <h2 class = "title">Human Resource Management in Education</h2>
            <p class ="description" > Effective management of personnel is vital for the success of any educational institution. 
                In this course, educators will acquire HR management skills tailored to the unique demands of schools and colleges.
                 Explore recruitment, staff development, performance evaluation, and conflict resolution to create a productive
                  and harmonious educational environment.</p>
        </div>
    
        <div class= "buttons">
            <div>
                <button class = "view" > View Content </button>
            </div>
            <div>
                <button class= "enroll"> Enroll now </button>
            </div>
        </div>
        <div>
            <button id = "star4">star</button>
        </div>
    </div>

    <div class="course">
        <img class = "course-img" src="course/image 5.jpeg" alt="Course 5 Image">
        <div class = "content ">
            <h2 class = "title">Financial Management for Educational Institutions</h2>
            <p class ="description" >Managing finances is a crucial aspect of running any educational institution. In this course, educators 
                will delve into financial management principles tailored to the unique needs of schools and colleges. Explore budgeting, 
                funding sources, financial reporting, and strategies to optimize resources, ensuring long-term sustainability.</p>
        </div>
    
        <div class= "buttons">
            <div>
                <button class = "view" > View Content </button>
            </div>
            <div>
                <button class= "enroll"> Enroll now </button>
            </div>
        </div>
        <div>
            <button id = "star5">star</button>
        </div>
    </div>
    <script>
        const starButtons = document.querySelectorAll('[id^="star"]');

        function StarredState(button) {
            let isStarred = false;
    
            button.addEventListener("click", function() {
                isStarred = !isStarred;
        
                if (isStarred) {
                    button.textContent = "Starred";
                    button.classList.add("starred");
                } else {
                    button.textContent = "Star";
                    button.classList.remove("starred");
                }
            });
        }

        starButtons.forEach(StarredState);
    </script>

</body>
</html>

<?php
      include 'footer.php';
?>
