<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nueva persona</title>
</head>
<body>

	<h1>Crear nueva persona</h1>

	<form action="procesar_nueva_persona.php" method="post">
		<p>
			<label for="dni">DNI:</label>
			<input type="text" id="dni" name="dni" maxlength="9" required>
		</p>
		<p>
			<label for="nombre">Nombre:</label>
			<input type="text" id="nombre" name="nombre" maxlength="100">
		</p>
		<p>
			<label for="apellido_1">Primer apellido:</label>
			<input type="text" id="apellido_1" name="apellido_1" maxlength="200">
		</p>
		<p>
			<label for="apellido_2">Segundo apellido:</label>
			<input type="text" id="apellido_2" name="apellido_2" maxlength="200">
		</p>
		<p>
			<label for="fecha_nacimiento">Fecha de nacimiento:</label>
			<input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
		</p>
		<p>
			<button type="submit">Crear persona</button>
		</p>
	</form>

	<p><a href="../index.php">Volver a index.php</a></p>

</body>
</html>
