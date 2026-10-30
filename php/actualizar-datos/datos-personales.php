<?php
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$fecha = $_POST['fecha'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos personales</title>
</head>
<body>

<h2>Formulario con datos personales</h2>

<form>
    <label>DNI:</label><br>
    <input type="text" value="<?= htmlspecialchars($dni) ?>" readonly><br><br>

    <label>Nombre:</label><br>
    <input type="text" value="<?= htmlspecialchars($nombre) ?>"><br><br>

    <label>Apellido 1:</label><br>
    <input type="text" value="<?= htmlspecialchars($apellido1) ?>"><br><br>

    <label>Apellido 2:</label><br>
    <input type="text" value="<?= htmlspecialchars($apellido2) ?>"><br><br>

    <label>Fecha de nacimiento:</label><br>
    <input type="date" value="<?= htmlspecialchars($fecha) ?>"><br><br>
</form>

</body>
</html>
