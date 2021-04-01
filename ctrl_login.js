
// Función para validar con un alert si el usuario y contraseña están vacíos
function checarlogin() {
    var usuario = document.forms["formlogin"]["usuario"].value;
    if (usuario == null || usuario == "" || usuario.length == 0 || usuario == undefined) {
        alert("El campo usuario no puede estar vacío");
        return false;
    };
    var pass = document.forms["formlogin"]["pass"].value;
    if (pass == null || pass == "" || pass.length == 0 || pass == undefined) {
        alert("El campo contraseña no puede estar vacío");
        return false;
    };
};