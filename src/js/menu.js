// Open mobile menu
let menuClick = document.querySelector(".menu-click");
let sidebar = document.querySelector(".sidebar");
let menuClose = document.querySelector(".menu-close");
if (menuClick) {
  menuClick.addEventListener("click", () => {
    sidebar.classList.remove("hidden");
  });
}
if (menuClose) {
  menuClose.addEventListener("click", () => {
    sidebar.classList.add("hidden");
  });
}