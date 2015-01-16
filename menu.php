<?php
	$nombre = explode('.', basename($_SERVER['PHP_SELF']));
	$nombre = $nombre[0];
?>
<ul class="topnav">
	<li><a href="index.php"    <?php if($nombre == 'index') echo 'class="current"'; ?> >Inicio</a></li>
	<li><a href="acerca_de.php" <?php if($nombre == 'acerca_de') echo 'class="current"'; ?> >Acerca de</a></li>
	<li><a href="precios.php"   <?php if($nombre == 'precios') echo 'class="current"'; ?> >Precios</a></li>
	<li><a href="index.php#portafolio"   <?php if($nombre == 'portafolio') echo 'class="current"'; ?> >Portafolio</a></li>
	<li><a href="contacto.php"  <?php if($nombre == 'contacto') echo 'class="current"'; ?> >Contacto</a></li>
</ul>