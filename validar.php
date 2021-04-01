<?php
// Conexion
include 'bd/conection.php';

if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	
	$sql="SELECT * FROM usuarios WHERE usuario = '$usuario' and pass = '$pass' ";
    $query = $conexion->prepare($sql);
	$query->bindParam("usuario", $usuario, PDO::PARAM_STR);
	$query->bindParam("pass", $pass, PDO::PARAM_STR);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);

// Se comprueba el tipo de sesión 
	if ($result) {		
		if ($result['tipo'] == 1) {
			session_start();
			$_SESSION['admin'] = '$usuario';
			header("Location: admin.php");
			exit();
		} else if($result['tipo'] == 0) {
			session_start();
			$_SESSION['user'] = '$usuario';
			header("Location: bienvenidousuario.php");
			exit();
		}	
	} else {
		echo "Credenciales incorrectas";
	}
// var_dump($result);	
} 
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
	<a href="login.php">Regresar al inicio de sesión</a>
</body>
</html>
