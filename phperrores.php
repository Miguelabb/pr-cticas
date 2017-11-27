<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>

	<h1>Ejercicio 1</h1>
	<form action="#" method="POST">
		<div>
			<input type="text" name="nombre" id="name">
		</div>
		<label for="name">Nombre:</label>
		<div>
			<input type="text" name="apellido1">
		</div>
		<label for="apellido1">Apellido 1:</label>
		<div>
			<input type="text" name="apellido2">
		</div>
		<label for="apellido2">Apellido 2:</label>
		<div>
			<input type="submit">
		</div>
		</form>

		<?php
if (isset($_POST["nombre"])) {
    if (empty($_POST["nombre"])) {
        echo "<p>El nombre está vacío</p>";

    }
    if (empty($_POST["apellido"])) {
    	echo "<p>El apellido está vacío</p>";
    }
}

if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"])
	&& !empty($_POST["apellido2"]))

		?>
</body>
</html>