let burger = document.querySelector(".burger");
let linkNav = document.querySelector(".link-nav");
burger.addEventListener("click", () => {
  linkNav.classList.toggle("mobile");
});
