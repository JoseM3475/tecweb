```php
<?php

require_once "utilidades.php";

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$edad = $_POST["edad"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Datos introducidos</h1>

    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Primer apellido: <?php echo $apellido1; ?></p>
    <p>Segundo apellido: <?php echo $apellido2; ?></p>
    <p>Edad: <?php echo $edad; ?></p>

    <?php

    if (es_mayor_de_edad($edad)) {
        echo "<p>La persona es mayor de edad.</p>";
    } else {
        echo "<p>La persona es menor de edad.</p>";
    }

    ?>

</body>
</html>
```
