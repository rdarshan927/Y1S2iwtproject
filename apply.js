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
        document.getElementById("conLi1").innerHTML = "Hello World!";
        document.getElementById("conLi2").innerHTML = "Hello World!";

        document.getElementById("con2H3").innerHTML = "Education & Qualification";
        document.getElementById("conLi21").innerHTML = "Hello World!";
        document.getElementById("conLi22").innerHTML = "Hello World!";

        document.getElementById("navigate2").style.backgroundColor = "#fff";
        document.getElementById("navigate1").style.backgroundColor = "#4267B2";
    }

    if (conNav === "navigate2"){
        document.getElementById("conH3").innerHTML = "Education Qualifications 2";
        document.getElementById("conLi1").innerHTML = "World Hello!";
        document.getElementById("conLi2").innerHTML = "World Hello!";

        document.getElementById("con2H3").innerHTML = "Education Qualifications 2";
        document.getElementById("conLi21").innerHTML = "World Hello!";
        document.getElementById("conLi22").innerHTML = "World Hello!";

        document.getElementById("navigate2").style.backgroundColor = "#4267B2";
        document.getElementById("navigate1").style.backgroundColor = "#fff";
    }
}