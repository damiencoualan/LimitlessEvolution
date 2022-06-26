const search = document.querySelector(".modal-search");
const closeSearch = document.querySelector(".close-search");
const toggleSearch = document.querySelector(".div-search-mob");

function Search() {
  search.classList.toggle("active");
}
toggleSearch.addEventListener("click", Search);

closeSearch.addEventListener("click", Search);
