<?php
	$correcto = false;
	$error_email = '';
	$mensaje = '';

	if(!empty($_POST)){
		$correcto = true;
		$error_nombre = '';
		$error_email = '';

		//$nombre_nuevo = preg_replace("/[^a-zA-Z]+/", "", $_POST['nombre']);
		$nombre = strip_tags($_POST['nombre']);

		$email = $_POST['email'];
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$correcto = false;
			$error_email = "Email inválido.";
		}

		$telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);

		$mensaje = $_POST['mensaje'];
		$mensaje = strip_tags($mensaje);

		if(!$error_email){
			//$to      = 'giovanni@waveapps.cl';
			$to      = 'giovanni.benussi@usach.cl';
			$subject = 'Contacto';
			$message = "Contacto desde WaveApps.cl:\r\n<br>";
			$message .= 'De: '.$nombre_nuevo.' ( '.$email.', '.$telefono." )\r\n<br>";
			$message .= 'Mensaje: '.$mensaje;

			$headers = 'From: '.$email."\r\n";
			$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
			$headers .= "CC: giovanni.benussi@usach.cl\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			$file = fopen("contacto.txt","a");
			echo fwrite($file, $message."\n\n=======================================\n\n");
			fclose($file);

			mail($to, $subject, $message, $headers);
		}
	}else if(!empty($_GET) && !empty($_GET['tipo'])){
		$tipo = strip_tags($_GET['tipo']);
		if($tipo == 'sitio_corporativo_plantilla'){
			$mensaje = 'Hola !, quisiera cotizar un sitio corporativo para mi negocio de . . .';
		}
		if($tipo == 'sitio_corporativo_personalizado'){
			$mensaje = 'Hola !, quisiera cotizar un sitio corporativo con diseño personalizado para mi negocio de . . .';
		}
		if($tipo == 'sitio_tienda_plantilla'){
			$mensaje = 'Hola !, quiero cotizar una tienda electrónica para mi negocio de . . .';
		}
		if($tipo == 'sitio_tienda_personalizado'){
			$mensaje = 'Hola !, quiero cotizar una tienda electrónica con diseño personalizado para mi negocio de . . .';
		}
		if($tipo == 'personalizado'){
			$mensaje = 'Hola !, quiero cotizar un sitio que . . .';
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Page Title -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<title>Contacto - WaveApps</title>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- CSS -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- JavaScript -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Main jQuery Files -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- General Site Configuration -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script type="text/javascript" src="js/common.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Carousels (Modified bxSlider) -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script type="text/javascript" src="js/jquery.carousel-content.min.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Settings -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script type="text/javascript" src="js/carousel-clients-settings.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- END JavaScript -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51170619-1', 'waveapps.cl');
		  ga('send', 'pageview');

		</script>
	</head>

	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<!-- Body - Add "contained" to below class for boxed layout -->
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<body class="light-bg">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Main Container -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<div class="main-container">

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Top Bar - Set "white" or "dark" below -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="topbar-outer dark">
				<div class="topbar content-width">

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Logo -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="table fullheight">
						<div class="table-cell fullheight middle">
							<div class="logo"><a href="index.php"><img alt="" src="images/topbar/logo_white.png" height="17" /></a></div>
						</div>
					</div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Logo -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Social Icons -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<ul class="topsocial">
						<li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a></li>
					</ul>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Social Icons -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Main Navigation -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<?php include('menu.php'); ?>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Main Navigation -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Mobile Navigation -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Show/Hide Menu Button -->
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<a href="#" class="mobilenav-click">
					<div class="mobilenav-button-container">
						<div class="mobilenav-button-inner">
							<div class="mobilenav-button"></div>
						</div>
					</div>
					</a>
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Show/Hide Menu Button -->
					<!-- ~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- Navigation Menu (Populated using jQuery) -->
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<div class="mobilenav-container">
						<ul class="mobilenav">
						</ul>
					</div>
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Navigation Menu
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Mobile Navigation -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				</div>
			</div>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Top Bar -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Main Content -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="main-content">
				<div class="main-content-inner content-width">

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Page Title -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<h1>¡ Contáctenos !</h1>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Title -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Intro -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<?php if($correcto): ?>
						<div class="alert green">
							Gracias por el interés, te contactaremos pronto !
							<span class="close" title="Close"></span>
						</div>
					<?php else: ?>
						<p>En waveapps estamos interesados en oír las consultas de nuestros clientes. Por lo tanto, cualquier duda / consulta que tengas no dudes en contactarnos... ¡ estaremos encantados de hablar contigo !</p>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Intro -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Spacer x 2 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="spacer"></div>
						<div class="spacer"></div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Spacer x 2 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Left Aligned Icons & Text (Vertically centered) -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="column-container">

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div class="column-one-third">
								<div class="icons-column vertical-center">
									<!-- Icon Backing -->
									<div class="icon-backing">
										<!-- Icon -->
										<i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="content-column vertical-center">
									<!-- Title -->
									<h3 class="no-margin">Llámanos</h3>
									<!-- Text -->
									<p>7 465 93 39</p>
								</div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div class="column-one-third">
								<div class="icons-column vertical-center">
									<!-- Icon Backing -->
									<div class="icon-backing">
										<!-- Icon -->
										<i class="fa fa-envelope"></i>
									</div>
								</div>
								<div class="content-column vertical-center">
									<!-- Title -->
									<h3 class="no-margin">Envíanos un email</h3>
									<!-- Text -->
									<p><a href="#">contacto@waveapps.cl</a></p>
								</div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div class="column-one-third">
								<div class="icons-column vertical-center">
									<!-- Icon Backing -->
									<div class="icon-backing">
										<!-- Icon -->
										<i class="fa fa-map-marker"></i>
									</div>
								</div>
								<div class="content-column vertical-center">
									<!-- Title -->
									<h3 class="no-margin">Encuéntranos</h3>
									<!-- Text -->
									<p>Próximamente...</p>
								</div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Third -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Left Aligned Icons & Text -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Spacer x 3 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="spacer"></div>
						<div class="spacer"></div>
						<div class="spacer"></div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Spacer x 3 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<?php if($error_email != ''): ?>
							<div class="alert red">
								Email inválido, verifíquelo porfavor !
								<span class="close" title="Close"></span>
							</div>
						<?php endif; ?>

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Contact Form -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<?php
							include("formulario_de_contacto.php");
							FormularioDeContacto();
						?>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Contact Form -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<?php endif; ?>
					</div>
			</div>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Main Content -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Footer Container -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<?php include('footer.php'); ?>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Footer Container -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		</div>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- END Main Container -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	</body>
</html>