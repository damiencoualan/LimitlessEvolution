// const form = document.getElementById("form");

// const lastname = document.getElementById("lastname");
// const firstname = document.getElementById("firstname");
// const email = document.getElementById("email");
// const success = document.querySelector("form .success");

// form.addEventListener("submit", (e) => {
//   e.preventDefault();

//   checkInputs();
// });

// function checkInputs() {
//   const lastnameValue = lastname.value.trim();
//   const firstnameValue = firstname.value.trim();
//   const emailValue = email.value.trim();

//   let error = 0;
//   success.classList.remove("active");

//   if (lastnameValue === "") {
//     setErrorFor(lastname, "Le champs ne peut être vide !");
//     error++;
//   } else {
//     setSuccessForm(lastname);
//   }
//   if (firstnameValue === "") {
//     setErrorFor(firstname, "Le champs ne peut être vide !");
//     error++;
//   } else {
//     setSuccessForm(firstname);
//   }
//   if (emailValue === "") {
//     setErrorFor(email, "L'e-mail ne peut pas être vide !");
//     error++;
//   } else if (!isEmail(emailValue)) {
//     setErrorFor(email, "Ceci n'est pas un e-mail valide !");
//     error++;
//   } else {
//     setSuccessForm(email);
//   }

//   if (error == 0) {
//     success.classList.add("active");
//     document.success.reset();
//   }
// }

// function setErrorFor(input, message) {
//   const blocForm = input.parentElement;
//   const span = blocForm.querySelectorAll("span-error");
//   blocForm.className = "bloc-form error";
//   span.innerText = message;
// }

// function setSuccessForm(submit) {
//   const success = submit.parentElement;
//   success.classList.remove("error");
//   document.getElementById("form").reset();
// }

// function isEmail(email) {
//   return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
//     email
//   );
// }
