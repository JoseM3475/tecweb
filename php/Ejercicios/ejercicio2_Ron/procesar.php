<?php
require_once "utilidades.php";

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$edad = (int) $_POST['edad'];
$sexo = $_POST['sexo'];

$vacaciones = $_POST['vacaciones'] ?? [];

$mayor = es_mayor_de_edad($edad);

// Validación meses
if (count($vacaciones) < 1 || count($vacaciones) > 3) {
    echo "<h2 style='color:red;'>ERROR: Debes elegir entre 1 y 3 meses.</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Ejercicio 2</title>
</head>
<body>

<h2>Datos recibidos</h2>

<p>Nombre: <?= $nombre ?></p>
<p>Apellido 1: <?= $apellido1 ?></p>
<p>Apellido 2: <?= $apellido2 ?></p>
<p>Edad: <?= $edad ?></p>
<p>Sexo: <?= $sexo ?></p>

<h3>Meses elegidos:</h3>
<?php
foreach ($vacaciones as $mes) {
    echo "<p>- $mes</p>";
}
?>

<h3>Mayor de edad:</h3>
<?php if ($mayor): ?>
    <p style="color:green;">Es mayor de edad.</p>
<?php else: ?>
    <p style="color:red;">NO es mayor de edad.</p>
<?php endif; ?>

</body>
</html>
