<?php
require_once "utilidades.php";   // Importamos la función

// Recibir datos del formulario
$nombre     = $_POST['nombre'];
$apellido1  = $_POST['apellido1'];
$apellido2  = $_POST['apellido2'];
$edad       = $_POST['edad'];

// Comprobar si es mayor de edad
$mayor = es_mayor_de_edad($edad);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<h2>Datos recibidos</h2>

<p><strong>Nombre:</strong> <?= $nombre ?></p>
<p><strong>Apellido 1:</strong> <?= $apellido1 ?></p>
<p><strong>Apellido 2:</strong> <?= $apellido2 ?></p>
<p><strong>Edad:</strong> <?= $edad ?></p>

<h3>Resultado:</h3>
<?php if ($mayor): ?>
    <p style="color:green;">Esta persona es mayor de edad.</p>
<?php else: ?>
    <p style="color:red;">Esta persona NO es mayor de edad.</p>
<?php endif; ?>

</body>
</html>
