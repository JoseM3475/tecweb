<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de actualización</title>
</head>
<body>

<h2>Actualizar datos personales</h2>

<form action="actualiza.php" method="POST">
    <label>DNI:</label><br>
    <input type="text" name="dni" required><br><br>

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido 1:</label><br>
    <input type="text" name="apellido1" required><br><br>

    <label>Apellido 2:</label><br>
    <input type="text" name="apellido2"><br><br>

    <label>Fecha de nacimiento:</label><br>
    <input type="date" name="fecha" required><br><br>

    <button type="submit">Enviar datos</button>
</form>

</body>
</html>
