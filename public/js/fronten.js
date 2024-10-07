const header = document.querySelector("header");
const mobileMenu = document.querySelector("#mobile-menu");

mobileMenu.addEventListener("click", () => {
  header.classList.toggle("active");
  mobileMenu.classList.toggle("active");
});
