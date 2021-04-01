function agendarcita(paciente, fechacita, horacita) {

	cadena="&paciente=" + paciente + "&fechacita=" + fechacita + "&horacita=" + horacita;

	$.ajax({

		type:"POST",
		url: "agendarcitas.php",
		data:cadena,
		success:function(r){
			if (r>=1){
				$('#tabla5').load('tablacitas.php');
				alertify.success("Agregado con éxito");
			}
			else {
				alertify.error("Falló xd");
			}
		} 
		});	
}

function preguntarSiNo5(cvecita){
	alertify.confirm('Eliminar cita', '¿Seguro que quieres eliminar esta cita?',

				 function(){ eliminarcita(cvecita) }
                , function(){ alertify.error('Se canceló')});
}

function eliminarcita(cvecita) {

	cadena="cvecita=" + cvecita;

	$.ajax({

		type:"POST",
		url: "elimcita.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla5').load('tablacitas.php');
				alertify.success("Agregado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
}

