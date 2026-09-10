<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

<h2>Formulario de datos personales</h2>

<form action="procesar.php" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido 1:</label><br>
    <input type="text" name="apellido1" required><br><br>

    <label>Apellido 2:</label><br>
    <input type="text" name="apellido2" required><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" required><br><br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>
