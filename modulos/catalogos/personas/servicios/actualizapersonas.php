<?php

if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido_paterno"]) || 
	!isset($_POST["apellido_materno"]) || 
    !isset($_POST["sexo"]) ||
    !isset($_POST["email"]) ||
    !isset($_POST["telefono"]) ||
    !isset($_POST["cve_estatus_registro"]) ||
    !isset($_POST["cve_persona"]) 
    
) 
exit();

include_once "../../../../bd/conection.php";

$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$cve_estatus_registro = $_POST["cve_estatus_registro"];
$cve_persona = $_POST["cve_persona"];

$sentencia = $conexion->prepare("UPDATE personas SET nombre = ?, apellido_paterno = ?, apellido_materno = ?, 
                                sexo= ?, email = ?, telefono = ?, cve_estatus_registro = ? WHERE cve_persona = ?");
                                // var_dump($sentencia);
$resultado = $sentencia->execute([$nombre, $apellido_paterno, $apellido_materno, $sexo, $email, $telefono, $cve_estatus_registro, $cve_persona]);
if($resultado == true) echo "Cambios guardados correctamente";
else echo "Algo salió mal en la inseción";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<p></p>
    <a href="../../../../admin.php">Regresar</a>
</body>
</html>