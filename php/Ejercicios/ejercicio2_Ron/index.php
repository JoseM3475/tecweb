<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>

<h2>Formulario Ejercicio 2</h2>

<form action="procesar.php" method="POST">

    Nombre:<br>
    <input type="text" name="nombre" required><br><br>

    Apellido 1:<br>
    <input type="text" name="apellido1" required><br><br>

    Apellido 2:<br>
    <input type="text" name="apellido2" required><br><br>

    Edad:<br>
    <input type="number" name="edad" required><br><br>

    <h3>Sexo:</h3>
    <label><input type="radio" name="sexo" value="Hombre" required> Hombre</label><br>
    <label><input type="radio" name="sexo" value="Mujer"> Mujer</label><br>
    <label><input type="radio" name="sexo" value="Otro"> Otro</label><br><br>

    <h3>Meses preferidos para vacaciones (mínimo 1, máximo 3):</h3>

    <?php
    $meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio",
              "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

    foreach ($meses as $m) {
        echo "<label><input type='checkbox' name='vacaciones[]' value='$m'> $m</label><br>";
    }
    ?>

    <br>
    <button type="submit">Enviar</button>

</form>

</body>
</html>
