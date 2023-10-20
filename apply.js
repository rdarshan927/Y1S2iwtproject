function getGreeting() {
    const currentTime = new Date().getHours();

    if (currentTime >= 5 && currentTime < 12) {
        return "Good morning, ";
    } else if (currentTime >= 12 && currentTime < 17) {
        return "Good afternoon, ";
    } else {
        return "Good evening, ";
    }
}

const greetingSpan = document.getElementById("greeting");
greetingSpan.textContent = getGreeting();


function conditionNav(conNav){

    if (conNav === "navigate1"){
        document.getElementById("conH3").innerHTML = "Education & Qualification";
        document.getElementById("conLi1").innerHTML = "<span>Specialized Degrees: </span>You might require instructors to hold specialized degrees, like a Masters in Education or a relevant subject. These degrees indicate a deep understanding of teaching principles and subject matter knowledge.";
        document.getElementById("conLi2").innerHTML = "<span>Continuous Learning: </span>Consider instructors who are pursuing further education or professional development. This demonstrates a commitment to staying up-to-date and improving their teaching skills, which is crucial in the ever-changing educational landscape.";

        document.getElementById("con2H3").innerHTML = "Teaching Experience";
        document.getElementById("conLi21").innerHTML = "<span>Depth of Experience: </span>Consider not only the number of years but also the depth of experience. Instructors with a wide range of teaching experiences, such as in different grades, subjects, or types of schools, may bring valuable insights. This variety can enrich the training they provide.";
        document.getElementById("conLi22").innerHTML = "<span>Recent Experience: </span>While years of experience are important, also look at how recent their teaching experience is. Education is an evolving field, and instructors who have taught recently are more likely to be familiar with the latest teaching methods and technologies.";

        document.getElementById("navigate2").style.backgroundColor = "#fff";
        document.getElementById("navigate1").style.backgroundColor = "#4267B2";
    }

    if (conNav === "navigate2"){
        document.getElementById("conH3").innerHTML = "Communication Skills";
        document.getElementById("conLi1").innerHTML = "<span>Clarity: </span> Effective communication is vital in teaching. Instructors should be able to explain concepts clearly and in a way that resonates with their audience. They should avoid jargon and make complex ideas accessible.";
        document.getElementById("conLi2").innerHTML = "<span>Listening Skills: </span>Good instructors not only talk but also listen. They should be able to understand the needs and concerns of the teachers they're training, allowing for a more personalized and effective learning experience.";

        document.getElementById("con2H3").innerHTML = "Expertise";
        document.getElementById("conLi21").innerHTML = "<span>Subject Expertise: </span>Instructors should have a strong command of their subject matter. They should be able to break down complex concepts and make them understandable to others, as this is a key aspect of effective teaching.";
        document.getElementById("conLi22").innerHTML = "<span>Pedagogical Expertise: </span>Look for instructors who not only know their subject but also understand pedagogy. They should be well-versed in different teaching methods, assessment techniques, and strategies to cater to various learning styles.";

        document.getElementById("navigate2").style.backgroundColor = "#4267B2";
        document.getElementById("navigate1").style.backgroundColor = "#fff";
    }
}