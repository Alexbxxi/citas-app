<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "Usted no tiene autorización";
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Usuario</title>
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap 4 JS -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="js/funciones.js"></script>

  <!-- Alertify -->
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">

  <!-- Nav del Admin -->
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="color: #ED5D5D">
    <a class="navbar-brand" href="bienvenidousuario.php">Panel de usuario</a>
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
  <div class="container">
    <h3>Bienvenido</h3>
    <br>
    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="agendarCita-tab" data-toggle="pill" href="#agendarCita" role="tab" aria-controls="agendarCita" aria-selected="true">Agendar una cita</a>
          <a class="nav-link" id="citas-tab" data-toggle="pill" href="#citas" role="tab" aria-controls="citas" aria-selected="false">Mis citas</a>
        </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <!-- Contenido agenda cita -->
          <div class="tab-pane fade show active" id="agendarCita" role="tabpanel" aria-labelledby="agendarCita-tab">
            <!-- Formulario agendar -->
            <div id="container">
              <form action="" id="formAgendaCita">
                <div class="modal-body col-sm-6 col-md-6 col-lg-6">
                  <label for="fecha">Fecha:</label>
                  <input type="date" class="form-control" id="fecha">
                </div>
                <div class="modal-body col-sm-6 col-md-6 col-lg-6">
                  <label for="fecha">Hora:</label>
                  <input type="time" class="form-control" id="hora">
                </div>
                <div class="modal-body">
                <button type="submit" id="agregarCita" name="agregarCita" class="btn btn-success">Agregar</button>				
					      <button type="submit" class="btn btn-primary" class="close" id="limpiar">Limpiar</button>
                </div>
              </form>
            </div>
          </div>

          <div class="tab-pane fade" id="citas" role="tabpanel" aria-labelledby="citas-tab">
              <?php
              include('/modulos/agendarCita/servicios/vista_tabla_citas');
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>