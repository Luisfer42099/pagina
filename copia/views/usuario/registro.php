<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
	<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'falled') : ?>
	<strong class="alert_red">Registro fallido, introoduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register'); ?>

<form action="<?= base_url ?>Usuario/save" method="POST">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required>

	<label for="apellido">Apellido</label>
	<input type="text" name="apellido" required>

	<label for="email">Email</label>
	<input type="email" name="email" required>

	<label for="password">Contraseña</label>
	<input type="password" name="password" required>

	<input type="submit" name="" value="Registrarse">
</form>