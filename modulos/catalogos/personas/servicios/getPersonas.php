<?php
include_once 'bd\conection.php';
$sentencia = $conexion->query("SELECT * FROM personas");
$personas = $sentencia->fetchAll(PDO::FETCH_OBJ);