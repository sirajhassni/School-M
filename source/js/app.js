// mobile navbar js

let navTogleBtn = document.getElementById("toggle-mob-nav");
let mobNavManu = document.getElementById("mob-manu");

navTogleBtn.addEventListener("click", function() {
  mobNavManu.classList.toggle("openNav");
  mobNavManu.style.transition = "0.5s";
});

// login pop up js
let loginBtn = document.getElementById("login");
let closeLogin = document.getElementById("close-lg-popup");
let loginPanelCard = document.querySelector(".overly");
let body = document.querySelector("body");
loginBtn.addEventListener("click", function() {
  loginPanelCard.style.display = "flex";
  body.classList.toggle("body-over-out");
});

closeLogin.addEventListener("click", function() {
  loginPanelCard.style.display = "none";
  body.classList.toggle("body-over-out");
});
