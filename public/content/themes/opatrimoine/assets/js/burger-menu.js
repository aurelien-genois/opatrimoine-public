const burgerMenu = document.querySelector(".burger-menu");
const navMenu = document.querySelector(".nav-list");

burgerMenu.addEventListener("click", mobileMenu);

function mobileMenu() {
    burgerMenu.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-list > a");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    burgerMenu.classList.remove("active");
    navMenu.classList.remove("active");
}