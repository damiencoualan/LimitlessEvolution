const modalContainer = document.querySelector(".modal-container");
const modalTrigger = document.querySelector(".modal-trigger");
const closeModal = document.querySelector(".close-modal");

function toggleModal() {
  console.log("ok");
  modalContainer.classList.toggle("active");
}
modalTrigger.addEventListener("click", toggleModal);
closeModal.addEventListener("click", toggleModal);
