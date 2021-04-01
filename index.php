<?php
session_start();
if (isset($_SESSION['admin']) || isset($_SESSION['user'])) {
  header("Location: indexSession.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>Atenta</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<script src="https://unpkg.com/scrollreveal"></script>
	<!-- <script type="text/javascript" src="js/jquery-3.3.1-min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
	
</head>

<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #FFABB9">
		<div class="container">
			<a class="navbar-brand" href="index.html">Diagnóstico Atenta</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#header">¿Quiénes somos?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-one">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#info-two">Promociones</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contáctanos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Iniciar sesión</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<header id="header">
		<div class="container mt-5">
			<div id="header1" class="row">
				<div class="col-md-6">
					<div class="header-content-left">
						<img src="imagenes/atenta1.jpg" style="width: 60%">
					</div>
				</div>
				<div class="col-md-6">
					<div class="header-content-right">
						<h1 class="display-4" style="text-align: center;">Diagnóstico Atenta</h1>
						<p class="text-justify">
						<h1 style="text-align: center;">¿Quienes somos?</h1>
						Somos dos psicólogas capaces de diagnosticar y tratar diversos problemas psicológicos, con ganas
						de ayudar a mejorar tu vida, para que veas y te des cuenta de que la vida tiene mucho que dar,
						una de sus cuestiones es la manera en la que la ves.
						Se toman en cuenta los tipos de psicodiagnóstico que pudieras necesitar: clínico,
						organizacional, social, personal, cognitivo y educativo.
						Se trabaja desde las dimensiones psicológicas: biológicas, conductuales/hábitos, socioafectivas
						y cognitivas.
						Junto con varias técnicas como la entrevista, las escalas, técnicas de juego, instrumentos
						proyectivos, historia clínica y pruebas psicométricas, podemos llegar a varias soluciones
						a tu problema.
						</p>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Testimonial -->

	<section id="testimonial">
		<div class="container">
			<p class="h2 mb-2">Queremos lograr que vivas tu vida de la mejor manera, que conozcas la felicidad, que
				vivas pleno/a, tranquilo/a contigo mismo y con tu entorno, que te quieras, te ames, te respetes, pero
				sobre todo te aceptes.</p>
		</div>
	</section>

	<!-- Info one -->

	<section id="info-one">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-6">
					<div class="info-left">
						<img src="imagenes/atencion.jpg" alt="atencion paciente" style="width: 100%">
					</div>
				</div>
				<div class="col-md-6 my-auto">
					<div class="info-right">
						<h2 style="text-align: center;">Servicios</h2>
						<p style="text-align: center;">-Realización de psicodiagnóstico.</p>
						<p style="text-align: center;">-Consultas presenciales y online.</p>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Info two -->

	<section id="info-two" style="background: #f1f1f1;">
		<div class="container">
			<div class="row my-5">
				<div class="col-md-6">
					<br>
					<br>
					<h2 style="text-align: center;">Tratamientos</h2>
					<p>-Aplicación de escalas con interpretación.</p>
					<p>-Aplicación de instrumentos proyectivos con interpretación.</p>
					<p>-Aplicación de pruebas de screening con interpretación.</p>
					<p>-Aplicación de instrumentos psicométricos con interpretación.</p>
					<p>-Consultas de ámbito clínico a niños, adolescentes y adultos.</p>
					<p>-Consultas de ámbito educativo a niños y adolescentes (con técnicas de observación en el entorno
						escolar, técnicas de entrevista a maestras/os con consultas a padres y a paciente).</p>
					<p>-Pláticas motivacionales.</p>
					<p>-Pláticas y capacitaciones a organizaciones.</p>
				</div>
				<div class="col-md-6">
					<br>
					<br>
					<h2 style="text-align: center;">Promociones</h2>
					<p class="text-justify"> Plática: “Sé tú mejor versión”.
						Dedicada a grupos de 10 mujeres que quieran ser la mejor versión de ellas mismas, logrando una
						introspección de cada una, identificando sus emociones, actitudes positivas y negativas (a cómo
						mejorar éstas) y a cómo manejarlas. Se utilizan diversas actividades. Se puede dar en
						consultorio o en casa (tipo café) a mujeres de cualquier edad.
						Precio normal: $400. Precio de promoción: $250.
						(Incluye café y aperitivos en caso de elegir plática tipo café).
					</p>
					<p class="text-justify"> Plática: “¿Eres un padre que pone límites o eres permisivo?”
						Dirigida a padres de familia con hijos de 2 a 8 años que quieran identificar si son padres que
						ponen límites o permisivos y a cómo poner límites sin llegar al regaño o al golpe.
						Precio normal: $400 por pareja, $250 individual. Precio de promoción: $250 por pareja, $150
						individual.
					</p>
				</div>
			</div>

		</div>
	</section>

	<!-- Contact -->

	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<form class="card my-5" action="" method="post">
						<h2 style="text-align: center;">Contáctanos</h2>
						<div class="card-body">
							<div class="form group">
								<input type="text" placeholder="Nombre" class="form-control">
							</div>
							<br>
							<div class="form group">
								<input type="email" placeholder="Email" class="form-control">
							</div>
							<br>
							<div class="form-group">
								<textarea rows="10" cols="30" placeholder="Mensaje" class="form-control">
								</textarea>
								<br>
								<button type="submit" class="btn btn-outline-secundary btn-block">
									Enviar
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<br>
	<br>

	<!-- Bootstrap 4 -->

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>

	<!-- Scripts plugin scrollreveal -->
	<script>
		window.sr = ScrollReveal();
		sr.reveal('.navbar', {
			duration: 2000,
			origin: 'bottom'
		});
		window.sr = ScrollReveal();
		sr.reveal('.header-content-left', {
			duration: 2000,
			origin: 'top',
			distance: '300px'
		});
		window.sr = ScrollReveal();
		sr.reveal('.header-content-right', {
			duration: 2000,
			origin: 'right',
			distance: '300px'
		});
		window.sr = ScrollReveal();
		sr.reveal('#testimonial', {
			duration: 2000,
			origin: 'left',
			distance: '300px',
			viewFactor: 0.2
		});

		window.sr = ScrollReveal();
		sr.reveal('#info-two', {
			duration: 2000,
			origin: 'bottom',
			distance: '300px',
			viewFactor: 0.2
		});

		window.sr = ScrollReveal();
		sr.reveal('#info-one', {
			duration: 2000,
			origin: 'right',
			distance: '300px',
			viewFactor: 0.2
		});

		window.sr = ScrollReveal();
		sr.reveal('#contact', {
			duration: 2000,
			origin: 'left',
			distance: '300px',
			viewFactor: 0.2
		});

		// SmoothScroll
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});

	</script>
</body>

</html>