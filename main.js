document.querySelector("#newsbtn").addEventListener('click', function () {
    let file = "news.php";
    loadContent(file);
});

document.querySelector("#profilebtn").addEventListener('click', function () {
    let file = "profile.php";
    loadContent(file);
});

document.querySelector("#signupbtn").addEventListener('click', function () {
    let file = "signup.php";
    loadContent(file);
});

document.querySelector("#faqbtn").addEventListener('click', function () {
    let file = "faq.php";
    loadContent(file);
});

function loadContent(content) {
    fetch(content)
        .then(response => response.text())
        .then(data => document.querySelector("#content").innerHTML = data);
}
