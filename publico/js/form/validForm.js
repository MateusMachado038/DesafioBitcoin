function validateNome(nome) {
  if (nome.length < 1) {
    const err = new Error("Campo nome não pode ficar vazio.");
    err.input = "name";
    throw err;
  }
}

function validateEmail(email) {
  if (!email.match(/\w{2,}@[a-zA-Z]{2,}\.[a-zA-Z]{2,}/)) {
    const err = new Error("Email inválido.");
    err.input = "email";
    throw err;
  }
}

function validatePassword(password) {
  if (password.length < 5) {
    const err = new Error("Senha deve ter ao menos 4 caracteres");
    err.input = "password";
    throw err;
  } else if (!password.match(/[a-z]/)) {
    const err = new Error("Senha deve ter ao menos uma letra minúscula");
    err.input = "password";
    throw err;
  } else if (!password.match(/[0-9]/)) {
    const err = new Error("Senha deve ter ao menos um número");
    err.input = "password";
    throw err;
  } else if (!password.match(/[^a-zA-Z0-9\s]/)) {
    //caractere Especial - ^ = negação dentro das chaves
    const err = new Error("Senha deve ter ao menos um caractere especial (! * @ # $...)");
    err.input = "password";
    throw err;
  }
}

function resetFormStyles() {
  Object.entries(userInputs).forEach(([key, value]) => {
    value.classList.remove("success", "error");
    document.querySelector(`#${key}-error`).textContent = "";
  });
}

const userInputs = {};

userInputs.name = document.querySelector("#nome");
userInputs.email = document.querySelector("#email");
userInputs.password = document.querySelector("#senha");

const form = document.getElementById("form");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  console.log("teste");
  resetFormStyles();
  try {
    validateNome(userInputs.name.value);
    userInputs.name.classList.add("success");
    validateEmail(userInputs.email.value);
    userInputs.email.classList.add("success");
    validatePassword(userInputs.password.value);
    userInputs.password.classList.add("success");
    form.submit();
  } catch (err) {
    userInputs[err.input].classList.add("error");
    document.querySelector(`#${err.input}-error`).textContent = err.message;
  }
});
