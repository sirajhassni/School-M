let navTogleBtn = document.getElementById("toggle-mob-nav");
let mobNavManu = document.getElementById("mob-manu");

navTogleBtn.addEventListener("click", function() {
  mobNavManu.classList.toggle("openNav");
  mobNavManu.style.transition = "0.5s";
});
