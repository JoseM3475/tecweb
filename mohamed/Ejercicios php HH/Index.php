```php
<?php

$nombre = "";
$apellido1 = "";
$apellido2 = "";
$edad = "";
$sexo = "";
$estadoCivil = "";
$meses = [];
$periodoVacaciones = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recoger datos personales
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $edad = $_POST["edad"];

    // Recoger sexo
    if (isset($_POST["sexo"])) {
        $sexo = $_POST["sexo"];
    }

    // Recoger estado civil
    if (isset($_POST["estadoCivil"])) {
        $estadoCivil = $_POST["estadoCivil"];
    }

    // Recoger meses de vacaciones
    if (isset($_POST["meses"])) {
        $meses = $_POST["meses"];
    }

    // Recoger periodo de vacaciones
    $periodoVacaciones = $_POST["periodoVacaciones"];

    // Comprobar que se han seleccionado entre 1 y 3 meses
    if (count($meses) < 1 || count($meses) > 3) {
        $error = "Debes seleccionar entre 1 y 3 meses de vacaciones.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Formulario</title>
</head>

<body>

<h1>Formulario de datos personales</h1>

<form method="POST" action="">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <label>Primer apellido:</label>
    <input type="text" name="apellido1" required>
    <br><br>

    <label>Segundo apellido:</label>
    <input type="text" name="apellido2" required>
    <br><br>

    <label>Edad:</label>
    <input type="number" name="edad" min="0" required>
    <br><br>


    <h3>Sexo:</h3>

    <input type="radio" name="sexo" value="Hombre" required>
    <label>Hombre</label>

    <input type="radio" name="sexo" value="Mujer">
    <label>Mujer</label>

    <br><br>


    <h3>Estado civil:</h3>

    <select name="estadoCivil" required>

        <option value="">-- Selecciona una opción --</option>
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divorciado</option>
        <option value="Otros">Otros</option>

    </select>

    <br><br>


    <h3>Meses preferidos para las vacaciones:</h3>

    <input type="checkbox" name="meses[]" value="Enero">
    <label>Enero</label>

    <input type="checkbox" name="meses[]" value="Febrero">
    <label>Febrero</label>

    <input type="checkbox" name="meses[]" value="Marzo">
    <label>Marzo</label>

    <input type="checkbox" name="meses[]" value="Abril">
    <label>Abril</label>

    <input type="checkbox" name="meses[]" value="Mayo">
    <label>Mayo</label>

    <input type="checkbox" name="meses[]" value="Junio">
    <label>Junio</label>

    <br><br>

    <input type="checkbox" name="meses[]" value="Julio">
    <label>Julio</label>

    <input type="checkbox" name="meses[]" value="Agosto">
    <label>Agosto</label>

    <input type="checkbox" name="meses[]" value="Septiembre">
    <label>Septiembre</label>

    <input type="checkbox" name="meses[]" value="Octubre">
    <label>Octubre</label>

    <input type="checkbox" name="meses[]" value="Noviembre">
    <label>Noviembre</label>

    <input type="checkbox" name="meses[]" value="Diciembre">
    <label>Diciembre</label>

    <br><br>


    <h3>Periodo de vacaciones:</h3>

    <textarea name="periodoVacaciones" rows="5" cols="50"
              placeholder="Escribe aquí las fechas en las que deseas disfrutar tus vacaciones..."
              required></textarea>

    <br><br>

    <input type="submit" value="Enviar">

</form>


<?php

if ($error != "") {

    echo "<h3 style='color:red;'>$error</h3>";

} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

?>

    <h2>Datos introducidos:</h2>

    <p>
        <strong>Nombre:</strong>
        <?php echo $nombre; ?>
    </p>

    <p>
        <strong>Primer apellido:</strong>
        <?php echo $apellido1; ?>
    </p>

    <p>
        <strong>Segundo apellido:</strong>
        <?php echo $apellido2; ?>
    </p>

    <p>
        <strong>Edad:</strong>
        <?php echo $edad; ?>
    </p>

    <p>
        <strong>Sexo:</strong>
        <?php echo $sexo; ?>
    </p>

    <p>
        <strong>Estado civil:</strong>
        <?php echo $estadoCivil; ?>
    </p>

    <p>
        <strong>Meses de vacaciones:</strong>
        <?php echo implode(", ", $meses); ?>
    </p>

    <p>
        <strong>Periodo solicitado:</strong>
        <?php echo $periodoVacaciones; ?>
    </p>

<?php

}

?>

</body>
</html>
```
