const menuTag = document.querySelector("svg");
const navPopupTag = document.querySelector("div.nav-popup");
const navExitTag = document.querySelector("div.menu-circle");

menuTag.addEventListener("click", function() {
  navPopupTag.style.display = "block";
})

navExitTag.addEventListener("click", function() {
  navPopupTag.style.display = "none";
})
