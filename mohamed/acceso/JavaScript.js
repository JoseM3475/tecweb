// =========================================
// INICIO DE SESIÓN DE PRUEBA
// =========================================

const formularioLogin = document.getElementById("formLogin");

formularioLogin.addEventListener("submit", function (evento) {

    evento.preventDefault();

    const usuario = document.getElementById("usuario").value;
    const password = document.getElementById("password").value;

    if (usuario === "mohamed" && password === "1234") {

        window.location.href = "../web.html";

    } else {

        alert("Usuario o contraseña incorrectos");

    }

});
