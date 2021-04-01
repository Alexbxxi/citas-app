<?php
if (!isset($_GET["cve_persona"])) exit();
$cve_persona = $_GET["cve_persona"];
include_once "../../../../bd/conection.php";
$sentencia = $conexion->prepare("SELECT * FROM personas WHERE cve_persona = ?");
$sentencia->execute([$cve_persona]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
if ($persona === FALSE) {
    #No existe
    echo "¡No existe alguna persona con ese ID!";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar persona</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../../alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../../../../alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/loginstyle.css">
    <script src="../../../../js/jquery-3.3.1.min.js"></script>
    <script src="../../../../js/funciones.js"></script>
    <script src="../../../../js/funcionagendar.js"></script>
    <script type="text/javascript" src="../../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../../alertifyjs/alertify.js"></script>
    <script type="text/javascript" src="../../../../modulos/catalogos/personas/ctrl_personas.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="align-content: center;">
    <ul class="breadcrumb">
            <li>Panel de administrador</li>
            <li>Actualización de personas</li>
        </ul>
        <div class="tittle">
            <br>
            <h5><strong>Datos de la persona</strong></h5>
        </div>
        <form action="actualizapersonas.php" method="POST" onsubmit="return validarFormulario()" id="addper">
            <input type="hidden" name="cve_persona" value="<?php echo $persona->cve_persona ?>">
            <div class="modal-body">
                <label>Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control input-sm"  value="<?php echo $persona->nombre; ?>" >
            </div>
            <div class="modal-body">
                <label>Apellido paterno:</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno"  class="form-control input-sm" value="<?php echo $persona->apellido_paterno ?>" >
            </div>
            <div class="modal-body">
                <label>Apellido materno:</label>
                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control input-sm" value="<?php echo $persona->apellido_materno ?>" >
            </div>
            <div class="modal-body">
                <label>Sexo:</label>
                <select name="sexo" id="sexo" class="form-control" value="<?php echo $persona->sexo ?>" >
                    <option value="">Selecciona una opción</option>
                    <option <?php echo $persona->sexo === 'H' ? "selected='selected'" : "" ?> value="H">Hombre</option>
                    <option <?php echo $persona->sexo === 'M' ? "selected='selected'" : "" ?> value="M">Mujer</option>
                </select>
            </div>
            <div class="modal-body">
                <label>Email:</label>
                <input type="text" name="email" id="email" class="form-control input-sm" value="<?php echo $persona->email ?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" >
            </div>
            <div class="modal-body">
                <label>Teléfono:</label>
                <input type="num" name="telefono" id="telefono" class="form-control input-sm" value="<?php echo $persona->telefono ?>" >
            </div>
            <div class="modal-body">
                <label>Estatus:</label>
                <select name="cve_estatus_registro" id="cve_estatus_registro" class="form-control" value="<?php echo $persona->cve_estatus_registro ?>" >
                    <option value="">Selecciona una opción</option>
                    <option <?php echo $persona->cve_estatus_registro === 'VIG' ? "selected='selected'" : "" ?> value="VIG">VIGENTE</option>
                    <option <?php echo $persona->cve_estatus_registro === 'NVG' ? "selected='selected'" : "" ?> value="NVG">NO VIGENTE</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="submit" value="Guardar cambios" class="btn btn-primary">Guardar cambios</button>
                <td><a class="btn btn-danger" href="../../../../admin.php">Cancelar</a></td>
            </div>
        </form>
    </div>
</body>

</html>