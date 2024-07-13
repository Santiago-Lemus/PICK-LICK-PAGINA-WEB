const navToggle = document.querySelector(".toggle");
const navMenu = document.querySelector(".main-menu");

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("main-menu_visible");
});