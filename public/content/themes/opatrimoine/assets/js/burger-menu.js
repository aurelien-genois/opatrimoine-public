const burgerMenu = document.querySelector(".burger-menu");
const navMenu = document.querySelector(".nav-menu");

burgerMenu.addEventListener("click", mobileMenu);

function mobileMenu() {
    burgerMenu.classList.toggle("active");
    navMenu.classList.toggle("active");
}