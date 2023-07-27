const toggleBtn = document.querySelector(".toggle_menu");
const headerNav = document.querySelector(".header_nav");
toggleBtn.addEventListener("click", () => {
  toggleBtn.classList.toggle("open");
  headerNav.classList.toggle("open");
});