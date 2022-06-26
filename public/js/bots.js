const bots = document.querySelector(".bots");
const closeBots = document.querySelector(".close-bots");
const help = document.querySelector(".svg-help");

function toggleBots() {
  bots.classList.toggle("active");
}
help.addEventListener("click", toggleBots);

closeBots.addEventListener("click", toggleBots);
