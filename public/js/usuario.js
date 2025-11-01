document.addEventListener("DOMContentLoaded", () => {
    let formulario = document.getElementById("formulario");

    formulario.addEventListener("submit", validar);
    document.getElementById("eye").addEventListener("mousedown", verCampo);
    document.getElementById("eye").addEventListener("mouseup", verCampo);

    function cambiarRojo(campo) {
        document.getElementById(campo).style.backgroundColor = "red";
    }

    // Funcion para cambiar a verde, recibe la cadena de id a cambiar
    function cambiarverde(campo) {
        document.getElementById(campo).style.backgroundColor = "green";
    }

    console.log("hola");
});
function verCampo() {
    let campoPass = document.getElementById("password");
    let campoPassRepeat = document.getElementById("password2");

    if (campoPass.type === "password" && campoPassRepeat.type === "password") {
        campoPass.type = "text";
        campoPassRepeat.type = "text";
    } else {
        campoPass.type = "password";
        campoPassRepeat.type = "password";
    }
}

function validar() {}
