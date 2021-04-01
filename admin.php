<?php
session_start();
if (!isset($_SESSION['admin'])) {
  echo "Usted no tiene autorización";
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Administrador</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/adminstyle.css"> -->
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/funciones.js"></script>
  <script src="js/funcionagendar.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="alertifyjs/alertify.js"></script>
  <script type="text/javascript" src="modulos/catalogos/personas/ctrl_personas.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<!-- Nav del Admin -->

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand bg-dark" href="admin.php">Panel de administrador</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto" role="tablist">
        <li class="nav-item dropdown">
          <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="indexSession.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Cerrar sesión</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <div class="container col-sm-12 col-md-12 col-lg-12">
    <!-- <h3 class="active">Bienvenido <?php echo $_SESSION['admin']; ?></h3>
    <br> -->
    <div class="row">
      <div class="col-sm-2 col-md-2 col-lg-2">
        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Catálogo de personas</a>
          <!-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Catálogo de personas</a> -->
          <!-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#adminpsic" role="tab" aria-controls="v-pills-messages" aria-selected="false">Psicologos</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#adminpac" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pacientes</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#admincitas" role="tab" aria-controls="v-pills-messages" aria-selected="false">Administrar citas</a> -->
        </div>
      </div>
      <div class="col-sm-10 col-md-10 col-lg-10">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <!-- Tabla  de personas -->
            <div id="tabla2">
              <?php
              // include ("/modulos/catalogos/servicios/tableuser.php");
              include('modulos/catalogos/personas/servicios/vista_tabla_persona.php');
              ?>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script>

document.getElementById('tablePersonas').style.color = "black";

function cambiaColor(celda) {
  celda.style.backgroundColor = "#E8E8E8";
}
</script>