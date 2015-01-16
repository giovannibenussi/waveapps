<?php
function FormularioDeContacto($action = "contacto.php"){ ?>
	<div class="contact-form">
		<form id="comment-form" name="contact-form" method="post" action="<?php echo $action; ?>">
			<!-- Textbox -->
			<input type="text" name="nombre" placeholder="Nombre *" <?php if(!empty($_POST['nombre'])) echo 'value="'.$_POST['nombre'].'"'; ?>/>
			<!-- Textbox -->
			<input type="text" name="email" placeholder="Correo electrónico *" <?php if(!empty($_POST['email'])) echo 'value="'.$_POST['email'].'"'; ?>/>
			<!-- Textbox -->
			<input type="text" name="telefono" placeholder="Teléfono (opcional)" <?php if(!empty($_POST['telefono'])) echo 'value="'.$_POST['telefono'].'"'; ?>/>
			<!-- Message Box -->
			<textarea name="mensaje" placeholder="Mensaje *"><?php if(!empty($mensaje)) echo $mensaje; ?></textarea>
			<!-- Submit Button -->
			<input type="submit" class="green" Value="Enviar"/>
		</form>
	</div>
<?php } ?>