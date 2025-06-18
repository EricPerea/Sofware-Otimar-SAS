//* Obtener los datos del formulario de la base de datos

  // @ts-ignore
  document.getElementById("container").addEventListener("submit", (event) => {
    event.preventDefault();
    // @ts-ignore
    const email = document.getElementById("usuario").value;
    // @ts-ignore
    const password = document.getElementById("contraseña").value;

    const emailDiv = document.querySelector("#usuarioDiv");
    const passwordDiv = document.querySelector("#contraseñaDiv");

    if (email != "evelynprogramadora2021@gmail.com") {
      const errorEmail = document.createElement("div");
      errorEmail.innerHTML = `
            <div class="error">¡Correo electronico incorrecto!</div>
        `;
      // @ts-ignore
      emailDiv.appendChild(errorEmail);

      setTimeout(() => {
        errorEmail.remove();
      }, 1500);
    }

    if (password != "Evelyn1220") {
      const passwordError = document.createElement("div");
      passwordError.innerHTML = `
            <div class="error" >¡Contraseña incorrecta!</div>
        `;
      // @ts-ignore
      passwordDiv.appendChild(passwordError);

      setTimeout(() => {
        passwordError.remove();
      }, 1500);
    }

    if (
      email == "evelynprogramadora2021@gmail.com" &&
      password == "Evelyn1220"
    ) {
      window.location.href = "Formlogin.html";
    }
  });
