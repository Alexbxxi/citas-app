function agregardatos(cve, nombre, pass, admin) {

	cadena="cve= " + cve + "&nombre=" + nombre + "&pass=" + pass + "&admin=" + admin;

	$.ajax({

		type:"POST",
		url: "agregardatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('tablaadmin.php');
				alertify.success("Agregado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
}

function agregaform(datos){

		d=datos.split('||');

		$('#cveu').val(d[0]);
		$('#nombreu').val(d[1]);
		$('#passu').val(d[2]);
		$('#adminu').val(d[3]);
		
}

function actualizadatos(){

	cve=$('#cveu').val();
	nombre=$('#nombreu').val();
	pass=$('#passu').val();
	admin=$('#adminu').val();

	cadena="cve= " + cve + "&nombre=" + nombre + "&pass=" + pass + "&admin=" + admin;

	$.ajax({

		type:"POST",
		url: "actualizadatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('tablaadmin.php');
				alertify.success("Actualizado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
		
}

function preguntarSiNo(ID){
	alertify.confirm('Eliminar datos', '¿Seguro que quiere eliminar el registro?',

				 function(){ eliminardatos(ID) }
                , function(){ alertify.error('Se canceló')});
}

function eliminardatos(ID){

		cadena="ID=" + ID;

		$.ajax({
			type:"POST",
			url:"elim.php",
			data:cadena,
			success:function(r){
				if (r==1) {
					$('#tabla').load('tablaadmin.php');
					alertify.success("Eliminado con exito");


				}else{
					alertify.error("Falló el servidor");
				}
			}


		});
}

function agregarpersona(Estados, Sexos, Situacionc, nombrep, paterno, materno, direccion, fechanac, telefono, email, rfc,) {

	cadena="&Estados=" + Estados + 
	"&Sexos=" + Sexos + "&Situacionc=" + Situacionc+ "&nombrep=" + nombrep + "&paterno=" + paterno + "&materno=" + materno + "&direccion=" + direccion + "&fechanac=" + fechanac + "&telefono=" + telefono + "&email=" + email + "&rfc=" + rfc;

	$.ajax({

		type:"POST",
		url: "agregarpersonas.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla2').load('tablauser.php');
				alertify.success("Agregado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
}

function agregaformpersonas(datosp){

		dp=datosp.split('||');

		$('#cveper').val(dp[0]);
		$('Estadosact').val(dp[1]);
		$('Sexosact').val(dp[2]);
		$('Situacioncact').val(dp[3]);
		$('#nombrepact').val(dp[4]);
		$('#paternoact').val(dp[5]);
		$('#maternoact').val(dp[6]);
		$('#direccionact').val(dp[7]);
		$('#fechanacact').val(dp[8]);
		$('#telefonoact').val(dp[9]);
		$('#emailact').val(dp[10]);
		$('#rfcact').val(dp[11]);
		
}

function actualizapersona(){

	cveper=$('#cveper').val();
	Estados=$('Estadosact').val();
	Sexos=$('Sexosact').val();
	Situacionc=$('Situacioncact').val();
	nombrep=$('#nombrepact').val();
	paterno=$('#paternoact').val();
	materno=$('#maternoact').val();
	direccion=$('#direccionact').val();
	fechanac=$('#fechanacact').val();
	telefono=$('#telefonoact').val();
	email=$('#emailact').val();
	rfc=$('#rfcact').val();

	cadena="&cveper=" + cveper + "&Estados=" + Estados + 
	"&Sexos=" + Sexos + "&Situacionc=" + Situacionc+ "&nombrep=" + nombrep + "&paterno=" + paterno + "&materno=" + materno + "&direccion=" + direccion + "&fechanac=" + fechanac + "&telefono=" + telefono + "&email=" + email + "&rfc=" + rfc;

	$.ajax({

		type:"POST",
		url: "actualizapersonas.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla2').load('tablauser.php');
				alertify.success("Actualizado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
		
}

		function preguntarSiNo2(cveper){
	alertify.confirm('Eliminar datos', '¿Seguro que quiere eliminar el registro?',

				 function(){ eliminardatos2(cveper) }
                , function(){ alertify.error('Se canceló')});
}

function eliminardatos2(cveper){

		cadena="cveper=" + cveper;

		$.ajax({
			type:"POST",
			url:"elimper.php",
			data:cadena,
			success:function(r){
				if (r==1) {
					$('#tabla2').load('tablauser.php');
					alertify.success("Eliminado con exito");


				}else{
					alertify.error("Falló el servidor");
				}
			}


		});
}

function agregarpsic(cvepsic, especialidad, cedulaprof) {

	cadena="&cvepsic= " + cvepsic + "&especialidad=" + especialidad + "&cedulaprof=" + cedulaprof;

	$.ajax({

		type:"POST",
		url: "agregarpsic.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla3').load('tablapsic.php');
				alertify.success("Agregado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
}

function agregarpac(cvepac, fecha_ingreso) {

	cadena="&cvepac= " + cvepac + "&fecha_ingreso=" + fecha_ingreso;

	$.ajax({

		type:"POST",
		url: "agregarpac.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla4').load('tablapac.php');
				alertify.success("Agregado con éxito");
			}else {
				alertify.error("Falló el servidor");
			}
		} 
		});	
}
