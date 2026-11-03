<?php
// Recibir datos del formulario
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
    <title>Datos recibidos</title>
</head>
<body>

<h2>Datos recibidos correctamente</h2>

<p><strong>DNI:</strong> <?= htmlspecialchars($dni) ?></p>
<p><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></p>
<p><strong>Apellido 1:</strong> <?= htmlspecialchars($apellido1) ?></p>
<p><strong>Apellido 2:</strong> <?= htmlspecialchars($apellido2) ?></p>
<p><strong>Fecha de nacimiento:</strong> <?= htmlspecialchars($fecha) ?></p>

<hr>

<h3>Enviar estos datos a datos-personales.php</h3>

<form action="datos-personales.php" method="POST">
    <input type="hidden" name="dni" value="<?= htmlspecialchars($dni) ?>">
    <input type="hidden" name="nombre" value="<?= htmlspecialchars($nombre) ?>">
    <input type="hidden" name="apellido1" value="<?= htmlspecialchars($apellido1) ?>">
    <input type="hidden" name="apellido2" value="<?= htmlspecialchars($apellido2) ?>">
    <input type="hidden" name="fecha" value="<?= htmlspecialchars($fecha) ?>">

    <button type="submit">Ver datos en formulario</button>
</form>

</body>
</html>
