<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Sesion iniciada</title>
</head>
<body>
	<div>
		<h1><?php echo "Ya hay sesión iniciada"; ?></h1>
		<br>
		<br>
			<li class="cerrar-session">
				<a href="logout.php">Cerrar sesión</a>
			</li>
	</div>
</body>
</html>
