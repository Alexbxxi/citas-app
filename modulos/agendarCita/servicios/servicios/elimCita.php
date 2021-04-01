<?php
if(!isset($_GET["cve_persona"])) exit();
$cve_persona = $_GET["cve_persona"];
include_once "../../../../bd/conection.php";
$sentencia = $conexion->prepare("DELETE FROM personas WHERE cve_persona = ?;");
$resultado = $sentencia->execute([$cve_persona]);
if($resultado === true) echo "Registro eliminado correctamente";
else echo "Algo salió mal";
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