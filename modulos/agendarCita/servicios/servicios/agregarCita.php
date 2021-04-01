<?php
if(!isset($_POST["nombre"]) || !isset($_POST["apellido_paterno"]) || !isset($_POST["apellido_materno"]) || !isset($_POST["sexo"]) || !isset($_POST["email"]) 
|| !isset($_POST["telefono"]) || !isset($_POST["cve_estatus_registro"])) exit();

include_once "../../../../bd/conection.php";
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$cve_estatus_registro = $_POST["cve_estatus_registro"];

$sentencia = $conexion->prepare("INSERT INTO personas(nombre, apellido_paterno, apellido_materno, sexo, email, telefono, cve_estatus_registro) VALUES (?, ?, ?, ?, ?, ?, ?)");
$resultado = $sentencia->execute([$nombre, $apellido_paterno, $apellido_materno, $sexo, $email, $telefono, $cve_estatus_registro]);

if($resultado === true) echo "Registrado correctamente";
else echo "Algo salió mal en la consulta";
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