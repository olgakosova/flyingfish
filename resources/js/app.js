const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".mobile-menu");
const links = document.querySelectorAll(".mobile-menu li");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});
