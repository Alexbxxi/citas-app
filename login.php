<?php
session_start();
if (isset($_SESSION['admin'])) {
  header("Location: admin.php");
}else if(isset($_SESSION['user'])){
  header("Location: bienvenidousuario.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <title>Iniciar sesión</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loginstyle.css">
  <!-- Controlador -->
  <script src="ctrl_login.js"></script> 
</head>

<body class="fondologin">
  <!-- <h2>Breadcrumb Pagination</h2> -->
  <ul class="breadcrumb">
    <li><a href="index.html">Inicio</a></li>
    <li>Inicio de sesión</li>
  </ul>
  <div class="my-content">
    <div class="container">
      <div class="row">
        <div class="my-content">
          <div class="mydescription">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10 col-sm-11 col-md-12 col-lg-8">
          <!-- Formulario -->
          <div class="formulario"  onsubmit="return checarlogin()">
            <h1 align="center"><strong>Ingresar a mi sesión</strong></h1>
            <br>
            <form action="validar.php" role="form" method="post" name="formlogin">
              <div class="form-group">
                <input type="text" name="usuario" id="usuario" placeholder="Ingresa el usuario"
                  class="form-control bordebtn">
              </div>
              <div class="form-group">
                <input type="password" name="pass" id="pass" placeholder="Ingresa la contraseña"
                  class="form-control bordebtn">
                <!-- <samp style="color:red" show="formulario.pass.required"><small>Campo requerido</small></samp> -->
              </div>
              <button type="submit" class="botonenviar bordebtn" name="login" id="login" value="login">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>

</html>