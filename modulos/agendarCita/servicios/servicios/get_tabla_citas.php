<?php
$varsesion = $_SESSION['admin'];
if ($varsesion == null) {
    echo "Usted no tiene autorización";
	die();
}
include_once 'bd\conection.php';
$sentencia = $conexion->query("SELECT * FROM personas");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<div class="row">
	<div class="col-sm-12">
		<h2 style="text-align: center;">Personas</h2>
		<br>
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalPersonas" style="text-align: right;">
				Nuevo
			</button>
		</caption>
		<br>
		<br>

		<!-- Se inicializa la tabla dinamica -->
		<table class="col-sm-12 col-md-12 col-lg-12 table table-hover table-condensed table-bordered">
			<thead>
				<tr>
					<th  style="text-align: center;">ID</th>
					<th  style="text-align: center;">Nombre</th>
					<th  style="text-align: center;">Apellido paterno</th>
					<th  style="text-align: center;">Apellido materno</th>
					<th  style="text-align: center;">Sexo</th>
					<th  style="text-align: center;">Email</th>
					<th  style="text-align: center;">Telefono</th>
					<th  style="text-align: center;">Estatus</th>
					<th style="text-align: center;" colspan="2">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($personas as $persona) { ?>
					<tr>
						<td style="text-align: left;"><?php echo $persona->cve_persona ?></td>
						<td style="text-align: left;"><?php echo $persona->nombre ?></td>
						<td style="text-align: left;"><?php echo $persona->apellido_paterno ?></td>
						<td style="text-align: left;"><?php echo $persona->apellido_materno ?></td>
						<td style="text-align: left;"><?php echo $persona->sexo ?></td>
						<td style="text-align: left;"><?php echo $persona->email ?></td>
						<td style="text-align: left;"><?php echo $persona->telefono ?></td>
						<td style="text-align: left;"><?php echo $persona->cve_estatus_registro ?></td>
						<td style="text-align: center;"><a class="btn btn-warning" href="<?php echo "modulos/catalogos/personas/servicios/vista_edit_persona.php?cve_persona=" . $persona->cve_persona ?>">Editar</a></td>
						<td  style="text-align: center;"><a class="btn btn-danger" href="<?php echo "modulos/catalogos/personas/servicios/elimpersonas.php?cve_persona=" . $persona->cve_persona ?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal para agregar personas-->
<div class="modal fade" id="modalPersonas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabe2">Datos de la persona</h5>
			</div>

			<form id="addper" method="POST" action="modulos/catalogos/personas/servicios/agregarpersonas.php" onsubmit="return validarFormulario()">
				<div class="modal-body">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Ingresa el nombre" >
				</div>

				<div class="modal-body">
					<label>Apellido paterno:</label>
					<input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control input-sm" placeholder="Ingresa el apellido paterno" >
				</div>

				<div class="modal-body">
					<label>Apellido materno:</label>
					<input type="text" name="apellido_materno" id="apellido_materno" class="form-control input-sm" placeholder="Ingresa el apellido materno" >
				</div>

				<div class="modal-body">
					<label>Sexo:</label>
					<select name="sexo" id="sexo" class="form-control" >
						<option value="">Selecciona una opción</option>
						<option value="H">Hombre</option>
						<option value="M">Mujer</option>
					</select>
				</div>

				<div class="modal-body">
					<label>Email:</label>
					<input type="text" name="email" id="email" class="form-control input-sm" placeholder="Ingresa el email" >
				</div>

				<div class="modal-body">
					<label>Teléfono:</label>
					<input type="num" name="telefono" id="telefono" class="form-control input-sm" placeholder="Ingresa el telefono" >
				</div>

				<div class="modal-body">
					<label>Estatus:</label>
					<select name="cve_estatus_registro" id="cve_estatus_registro" class="form-control" >
						<option value="">Selecciona una opción</option>
						<option value="VIG">VIGENTE</option>
						<option value="NVG">NO VIGENTE</option>
					</select>
				</div>
				
				<div class="modal-footer">
					<button type="submit" id="agregarPersona" name="agregarPersona" class="btn btn-primary">Agregar</button>				
					<button type="submit" class="btn btn-danger" class="close" data-dismiss="modal" id="cancelar">Cancelar</button>
				</div>
			</form>
		</div>
	</div>
</div>