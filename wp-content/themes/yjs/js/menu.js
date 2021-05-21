const menuTag = document.querySelector("svg");
const mobileMenuTag = document.querySelector("div.mobile-menu-nav h4");
const navPopupTag = document.querySelector("div.nav-popup");
const navExitTag = document.querySelector("div.menu-circle");

menuTag.addEventListener("click", function() {
  navPopupTag.style.display = "flex";
})

navExitTag.addEventListener("click", function() {
  navPopupTag.style.display = "none";
})

mobileMenuTag.addEventListener("click", function() {
  navPopupTag.style.display = "flex";
})


