<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1">

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Page Title -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<title>Inicio - WaveApps</title>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- END Page Title -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- CSS -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<link href="css/styles.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- END CSS -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

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
		<script type="text/javascript" src="js/jquery.carousel-main.min.js"></script>
		<script type="text/javascript" src="js/jquery.carousel-content.min.js"></script>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- Settings -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<script type="text/javascript" src="js/home-slider-settings.js"></script>
		<script type="text/javascript" src="js/carousel-portfolio-settings.js"></script>
		<script type="text/javascript" src="js/carousel-blog-settings.js"></script>
		<script type="text/javascript" src="js/carousel-testimonials-settings.js"></script>
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
	<!-- Body - Add "contained" to below classes for boxed layout -->
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<body class="light-bg home">

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
							<div class="logo"><a href="index.php"><img alt="" src="images/topbar/logo_white.png" height="26" /></a></div>
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
			<!-- Home Banner ("light" and "dark" style can be applied here) -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="home-banner dark">

				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- Slides -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<ul class="slider-container" id="home-slider">
					<li class="slide-outer">
						<div class="slide-inner">
							<div class="content-width">
								<div class="slide-style-3">
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- Left Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<div class="left-column">
										<!-- Title -->
										<h1>Su sitio desde $80.000<span>.</span></h1>
										<!-- Text -->
										<p>¡ 30% más barato que la competencia !<br>
										¡ Entrega de 3 a 5 días !
										</p>
										<!-- Button -->
										<a class="button green" href="precios.php"><i class="fa fa-dollar"></i>Ver tabla de precios</a>
										<a class="button accent" href="contacto.php"><i class="fa fa-info-circle"></i>Más información</a>
									</div>
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- END Left Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- Right Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<div class="right-column">
										<!-- Image -->
										<img alt="" src="images/iphone-image.png"/>
									</div>
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- END Right Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
						</div>
					</li>

					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- Slide 1 (Big Title & Text) -->
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<li class="slide-outer">
						<div class="slide-inner">
							<div class="content-width">
								<div class="slide-style-3">
									<div class="left-column">
										<!-- Title -->
										<h1>Su negocio abierto las <br><span>24 horas</span><span>.</span></h1>
										<!-- Text -->
										<p>Un sitio web le permite a sus clientes conocer su negocio en cualquier momento.</p>
										<!-- Button -->
										<a class="pull-right button white" href="contacto.php"><i class="fa fa-envelope"></i>Contáctenos</a>
										<!-- Button -->
										<a class="pull-right button green" href="contacto.php"><i class="fa fa-info-circle"></i>Más información</a>
									</div>
									<div class="right-column">
										<!-- Image -->
										<img alt="" src="images/Shop-building-256.png"/>
									</div>
								</div>
							</div>
						</div>
					</li>
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Slide 1 -->
					<!-- ~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- Slide 2 (Centered Icon & Text) -->
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<li class="slide-outer">
						<div class="slide-inner">
							<div class="content-width">
								<div class="slide-style-2">
									<div class="icon-container">
										<!-- Icon Backing -->
										<div class="icon-backing">
											<!-- Icon -->
											<i class="fa fa-shopping-cart"></i>
										</div>
									</div>
									<!-- Title -->
									<h1>¿Sabía usted que pierde clientes al no estar en internet?</h1>
									<!-- Text -->
									<p>Más del 80% de la población ha usado internet para comprar algo.</p>
									<a class="button green" href="contacto.php">Quiero saber más</a>
								</div>
							</div>
						</div>
					</li>
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Slide 2 -->
					<!-- ~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- Slide 3 (Left Text / Right Image) -->
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<li class="slide-outer">
						<div class="slide-inner">
							<div class="content-width">
								<div class="slide-style-3">
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- Left Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<div class="left-column">
										<!-- Title -->
										<h1>Rompa las barreras físicas<span>.</span></h1>
										<!-- Text -->
										<p>El mundo de hoy está en constante movimiento.<br>
										Descubra cómo ser parte de él.
										</p>
										<!-- Button -->
										<a class="button accent" href="contacto.php"><i class="fa fa-info-circle"></i>Más información</a>
									</div>
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- END Left Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- Right Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<div class="right-column">
										<!-- Image -->
										<img alt="" src="images/iphone-image.png"/>
									</div>
									<!-- ~~~~~~~~~~~~~~~~~ -->
									<!-- END Right Column -->
									<!-- ~~~~~~~~~~~~~~~~~ -->
								</div>
							</div>
						</div>
					</li>
					<!-- ~~~~~~~~~~~~~~~~~ -->
					<!-- END Slide 3 -->
					<!-- ~~~~~~~~~~~~~~~~~ -->

				</ul>
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- END Slides -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- Banner Navigation Bar -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<div class="slider-nav-container">
					<div class="slider-nav-inner">
						<div class="slider-nav content-width">

							<!-- ~~~~~~~~~~~~~~~~~ -->
							<!-- Slide Links -->
							<!-- ~~~~~~~~~~~~~~~~~ -->
							<ul id="bx-pager">
								<li><a data-slide-index="0" href="">Su sitio desde $80.000</a></li>
								<li><a data-slide-index="1" href="">Su negocio abierto las 24 horas</a></li>
								<li><a data-slide-index="2" href="">¿Sabía usted que pierde clientes al no estar en internet?</a></li>
								<li><a data-slide-index="3" href="">Rompa las barreras físicas</a></li>
							</ul>
							<!-- ~~~~~~~~~~~~~~~~~ -->
							<!-- END Slide Links -->
							<!-- ~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~ -->
							<!-- Slide Controls -->
							<!-- ~~~~~~~~~~~~~~~~~ -->
							<div class="slider-controls">
								<div id="slider-pause"></div>
								<div id="slider-prev"></div>
								<div id="slider-next"></div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~ -->
							<!-- END Slide Controls -->
							<!-- ~~~~~~~~~~~~~~~~~ -->

						</div>
					</div>
				</div>
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- END Banner Navigation Bar -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			</div>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Home Banner -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Main Content -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="main-content">
				<div class="main-content-inner content-width">

					<div class="column-container">

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Latest News Columns -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="column-three-qtr">

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Divider -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!--<div class="divider"></div>-->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Divider -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Title -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<h3 class="section-title">¿Qué hacemos?</h3>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Title -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Navigation (Back/Next) -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div id="blog-nav" class="carousel-nav">
								<div class="back"></div>
								<div class="next"></div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Navigation (Back/Next) -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- The Carousel -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div class="carousel">
								<ul id="blog-carousel" class="slider-container">

									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<li class="column-one-fourth">
										<!-- Image -->
										<!-- Autor: RocketTheme -->
										<!-- Url:   http://www.iconspedia.com/pack/rockettheme-ecommerce-icons-4107/ -->
										<a href="blog-post.html" class="image-link"><img alt="" src="images/que_hacemos/Gift-Bag-256.png" class="fullwidth"/></a>
										<!-- Title -->
										<h3><a href="blog-post.html">Tienda electrónica</a></h3>
										<!-- Date -->
										<!--<div class="date">12th June 2013</div>-->
										<!-- Excerpt -->
										<p class="contenido_que_hacemos">Ofrecemos tiendas profesionales a bajo costo para que llegue a más clientes y aumente sus ventas.
										<!--<p>¡ Venda online ahora !--></p>
										<!-- Read More Link -->
										<a href="blog-post.html">Leer más</a>
									</li>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- END One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<li class="column-one-fourth">
										<!-- Image -->
										<a href="blog-post.html" class="image-link"><img alt="" src="images/que_hacemos/icon-easel-flat.png" class="fullwidth"/></a>
										<!-- Title -->
										<h3><a href="blog-post.html">Páginas corporativas</a></h3>
										<!-- Date -->
										<!-- <div class="date">12th June 2013</div> -->
										<!-- Excerpt -->
										<p class="contenido_que_hacemos">Tenemos opciones para todos los bolsillos. No pague demás por su página web, contáctenos!</p>
										<!-- Read More Link -->
										<a href="blog-post.html">Leer más</a>
									</li>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- END One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<li class="column-one-fourth">
										<!-- Image -->
										<a href="blog-post.html" class="image-link"><img alt="" src="images/que_hacemos/settings.png" class="fullwidth"/></a>
										<!-- Title -->
										<h3><a href="blog-post.html">Sistemas de administración</a></h3>
										<!-- Date -->
										<!-- <div class="date">12th June 2013</div> -->
										<!-- Excerpt -->
										<p class="contenido_que_hacemos">Automatice su negocio y permítale a sus trabajadores preocuparse de las cosas realmente importantes.</p>
										<!-- Read More Link -->
										<a href="blog-post.html">Leer más</a>
									</li>
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- END One Fourth -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

								</ul>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Carousel -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Latest News Columns -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- Testimonials Column -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="column-one-fourth">

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Divider -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- <div class="divider"></div> -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Divider -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Title -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<h3 class="section-title">Testimonios</h3>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Title -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Navigation (Back/Next) -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div id="testimonials-nav" class="carousel-nav">
								<div class="back"></div>
								<div class="next"></div>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Navigation (Back/Next) -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- Carousel -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<div class="carousel">
								<ul id="testimonials-carousel" class="slider-container">

									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<!-- Testimonial 1 -->
									<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
									<li class="column-one-fourth">
										<!-- Text -->
										<div class="testimonial-text">
											<p>"Como Diseñador siempre encuentro nuevas opciones con WaveApps para desarrollar mejores sitios, realizan un trabajo limpio y profesional."</p>
										</div>
										<!-- Name -->
										<div class="testimonial-name">
											Eduardo Meneses
										</div>
										<!-- Company URL -->
										<div class="testimonial-link">
											<a href="http://fizz.cl/" target="_blank">Estudio Grafico Fizz</a>
										</div>
									</li>
								</ul>
							</div>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END Carousel -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END Testimonials Column -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					</div>
					<div class="divider" id="portafolio"></div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Divider -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Latest Work -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Title -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<h3 class="section-title">Trabajos / Participaciones</h3>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Title -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Navigation (Back/Next) -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div id="portfolio-nav" class="carousel-nav">
						<div class="back"></div>
						<div class="next"></div>
					</div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Navigation (Back/Next) -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- The Carousel -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="carousel">
						<ul id="portfolio-carousel" class="slider-container">

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<li class="column-one-fourth portfolio-item branding">
								<!-- Image -->
								<!--<a href="portfolio-detail.html" class="image-link"><img alt="" src="images/trabajos_logos/vai_chile_logo.png" class="fullwidth"/></a>-->
								<a href="#" class="image-link"><img alt="" src="images/trabajos_logos/vai_chile_logo.png" class="fullwidth"/></a>
								<!-- Title -->
								<h3><a href="portfolio-detail.html">Agua Vai</a></h3>
								<!-- Tags -->
								<div class="tags">Vaichile</div>
							</li>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<li class="column-one-fourth portfolio-item coding">
								<!-- Image -->
								<a href="#" class="image-link"><img alt="" src="images/trabajos_logos/mi_tienda_natural_logo.png" class="fullwidth"/></a>
								<!-- Title -->
								<h3><a href="portfolio-detail.html">Mi Tienda Natural</a></h3>
								<!-- Tags -->
								<div class="tags">NaturalClinic</div>
							</li>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<li class="column-one-fourth portfolio-item branding identity">
								<!-- Image -->
								<a href="#" class="image-link"><img alt="" src="images/trabajos_logos/sitios_diinf_logo.png" class="fullwidth"/></a>
								<!-- Title -->
								<h3><a href="portfolio-detail.html">Sitios Departamento Ingeniería Informática</a></h3>
								<!-- Tags -->
								<div class="tags">Universidad de Santiago</div>
							</li>
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- END One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<!-- One Fourth -->
							<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
							<li class="column-one-fourth portfolio-item identity">
								<!-- Image -->
								<a href="#" class="image-link"><img alt="" src="images/trabajos_logos/issue_management_system.jpg" class="fullwidth"/></a>
								<!-- Title -->
								<h3><a href="portfolio-detail.html">Issue Management System</a></h3>
								<!-- Tags -->
								<div class="tags">Mediasphere</div>
							</li>
						</ul>
					</div>
					<div class="divider" id="portafolio"></div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Carousel -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Latest News / Testimonials -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Left Aligned Icons & Text -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<div class="column-container">

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="column-one-third">
							<div class="icons-column">
								<!-- Icon Backing -->
								<div class="icon-backing" style="background-color: #439460;">
									<!-- Icon -->
									<i class="fa fa-dollar"></i>
								</div>
							</div>
							<div class="content-column">
								<!-- Title -->
								<h3>Precios competitivos</h3>
								<!-- Text -->
								<p>Automatizamos la mayor cantidad posible de nuestros procesos, lo cual implica un menor costo para nuestros clientes.</p>
							</div>
						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

						<div class="column-one-third">
							<div class="icons-column">
								<!-- Icon Backing -->
								<div class="icon-backing" style="background-color: #DD4952;">
									<!-- Icon -->
									<i class="fa fa-heart"></i>
								</div>
							</div>
							<div class="content-column">
								<!-- Title -->
								<h3>Pasión</h3>
								<!-- Text -->
								<p>Somos un equipo apasionado por nuestro trabajo. Es por eso que intentamos dejar nuestra huella en cada proyecto.</p>
							</div>
						</div>

						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<div class="column-one-third">
							<div class="icons-column">
								<!-- Icon Backing -->
								<div class="icon-backing" style="background-color: #342D47;">
									<!-- Icon -->
									<i class="fa fa-group"></i>
								</div>
							</div>
							<div class="content-column">
								<!-- Title -->
								<h3>Profesionalismo</h3>
								<!-- Text -->
								<p>Creemos que la competitividad es buena para el país, es por eso que nos perfeccionamos día a día para entregar los mejores productos del mercado.</p>
							</div>
						</div>
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- END One Third -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					</div>
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- END Left Aligned Icons & Text -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Divider -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					

					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
					<!-- Latest News / Testimonials (Three Quater/One Fourth) -->
					<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				</div>
			</div>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Main Content -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- Footer Container -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<div class="footer-container">

				<!-- Spacer (20px gap) -->
				<div class="spacer"></div>
	
				<?php include('tecnologias.php') ?>

				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- END Client Logos -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- Footer Infobar -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<div class="footer-infobar">
					<div class="content-width">
						<!-- Text -->
						Si buscas tener un sitio que cumpla con todas tus espectativas y más... ¡ no dudes en contactarnos !
					</div>
				</div>
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- END Footer Infobar -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- Footer -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<?php include('footer.php'); ?>
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
				<!-- END Footer -->
				<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			</div>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
			<!-- END Footer Container -->
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		</div>
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- END Main Container -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

	</body>
</html>