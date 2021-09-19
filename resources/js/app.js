const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".mobile-menu");
const links = document.querySelectorAll(".mobile-menu li");
const body = document.querySelector("body");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  body.classList.toggle("hide-it");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});
