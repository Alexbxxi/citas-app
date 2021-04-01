// Validación básica de formulario de personas
function validarFormulario() {
    var nombre = document.forms["addper"]["nombre"].value;
    if (nombre == null || nombre == "" || nombre.length == 0 || /^\s+$/.test(nombre) || !isNaN(nombre)) {
        alert("El campo nombre no puede estar vacio, tener numeros ni caracteres especiales");
        return false;
    };

    var apellido_paterno = document.forms["addper"]["apellido_paterno"].value;
    if (apellido_paterno == null || apellido_paterno == "" || apellido_paterno.length == 0 || /^\s+$/.test(apellido_paterno) || !isNaN(apellido_paterno)) {
        alert("El campo apellido paterno no puede estar vacio, tener numeros ni caracteres especiales");
        return false;
    };

    var apellido_materno = document.forms["addper"]["apellido_materno"].value;
    if (apellido_materno == null || apellido_materno == "" || apellido_materno.length == 0 || /^\s+$/.test(apellido_materno) || !isNaN(apellido_materno)) {
        alert("El campo apellido materno no puede estar vacio, tener numeros ni caracteres especiales");
        return false;
    };

    var sexo = document.forms["addper"]["sexo"].selectedIndex;
    if (sexo == null || sexo == 0) {
        alert("Debe seleccionar una opción en el campo sexo");
        return false;
    };

    var email = document.forms["addper"]["email"].value;
    if (email == null || email == "" || email.length == 0 || /^\s+$/.test(email) || !isNaN(email)) {
        alert("El campo email no puede estar vacio");
        return false;
    };

    var telefono = document.forms["addper"]["telefono"].value;
    if (isNaN(telefono) || telefono == null || telefono == "" || telefono.length == 0 || /^\s+$/.test(telefono)) {
        alert("Este campo telefono no puede estar vacio y solo puede contener numeros");
        return false;
    };

    var cve_estatus_registro = document.forms["addper"]["cve_estatus_registro"].selectedIndex;
    if (cve_estatus_registro == null || cve_estatus_registro == 0) {
        alert("Debe seleccionar una opción en el campo estatus");
        return false;
    };

};

// function agregarpersona(nombre, apellido_paterno, apellido_materno, sexo, cve_estatus_registro) {

// 	cadena="&nombre=" + nombre + 
// 	        "&apellido_paterno=" + apellido_paterno + 
//             "&apellido_materno=" +  apellido_materno+ 
//             "&sexo=" + sexo + 
//             "&cve_estatus_registro=" + cve_estatus_registro;

// 	$.ajax({

// 		type:"POST",
// 		url: "agregarpersonas.php",
// 		data:cadena,
// 		success:function(r){
// 			if (r==1) {
// 				$('#tabla2').load('vista_tabla_persona.php');
// 				alertify.success("Agregado con éxito");
// 			}else {
// 				alertify.error("Falló el servidor");
// 			}
// 		} 
// 		});	
// };

// Get all users
// var url  = "http://localhost:8080/api/v1/users";
// var xhr  = new XMLHttpRequest()
// xhr.open('GET', url, true)
// xhr.onload = function () {
// 	var users = JSON.parse(xhr.responseText);
// 	if (xhr.readyState == 4 && xhr.status == "200") {
// 		console.table(users);
// 	} else {
// 		console.error(users);
// 	}
// }
// xhr.send(null);


// // Get a user
// var url  = "http://localhost:8080/api/v1/users";
// var xhr  = new XMLHttpRequest()
// xhr.open('GET', url+'/1', true)
// xhr.onload = function () {
// 	var users = JSON.parse(xhr.responseText);
// 	if (xhr.readyState == 4 && xhr.status == "200") {
// 		console.table(users);
// 	} else {
// 		console.error(users);
// 	}
// }
// xhr.send(null);


// // Post a user
// var url = "http://localhost:8080/api/v1/users";

// var data = {};
// data.firstname = "John";
// data.lastname  = "Snow";
// var json = JSON.stringify(data);

// var xhr = new XMLHttpRequest();
// xhr.open("POST", url, true);
// xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
// xhr.onload = function () {
// 	var users = JSON.parse(xhr.responseText);
// 	if (xhr.readyState == 4 && xhr.status == "201") {
// 		console.table(users);
// 	} else {
// 		console.error(users);
// 	}
// }
// xhr.send(json);


// // Update a user
// var url = "http://localhost:8080/api/v1/users";

// var data = {};
// data.firstname = "John2";
// data.lastname  = "Snow2";
// var json = JSON.stringify(data);

// var xhr = new XMLHttpRequest();
// xhr.open("PUT", url+'/12', true);
// xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
// xhr.onload = function () {
// 	var users = JSON.parse(xhr.responseText);
// 	if (xhr.readyState == 4 && xhr.status == "200") {
// 		console.table(users);
// 	} else {
// 		console.error(users);
// 	}
// }
// xhr.send(json);


// // Delete a user
// var url = "http://localhost:8080/api/v1/users";
// var xhr = new XMLHttpRequest();
// xhr.open("DELETE", url+'/12', true);
// xhr.onload = function () {
// 	var users = JSON.parse(xhr.responseText);
// 	if (xhr.readyState == 4 && xhr.status == "200") {
// 		console.table(users);
// 	} else {
// 		console.error(users);
// 	}
// }
// xhr.send(null);
