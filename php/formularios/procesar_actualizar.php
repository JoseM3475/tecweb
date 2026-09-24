<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona</title>
</head>
<body>

    <h1>Actualizar Persona</h1>

    <?php
        $dni = trim($_POST['dni'] ?? '');

        if (strlen($dni) !== 9) {
            echo '<p>El DNI debe tener 9 caracteres.</p>';
        } else {
            $conexion = pg_connect(
                "host=" . getenv("DB_HOST") .
                " port=" . getenv("DB_PORT") .
                " dbname=" . getenv("DB_NAME") .
                " user=" . getenv("DB_USER") .
                " password=" . getenv("DB_PASSWORD") .
                " sslmode=require"
            );

            if (!$conexion) {
                die('<p>Error al conectar con la base de datos.</p>');
            }

            if (isset($_POST['actualizar'])) {
                // Segunda fase: guardar los cambios recibidos del formulario de edición
                $nombre = trim($_POST['nombre'] ?? '');
                $apellido_1 = trim($_POST['apellido_1'] ?? '');
                $apellido_2 = trim($_POST['apellido_2'] ?? '');
                $fecha_nacimiento = trim($_POST['fecha_nacimiento'] ?? '');

                if ($fecha_nacimiento !== '' && !DateTime::createFromFormat('Y-m-d', $fecha_nacimiento)) {
                    echo '<p>La fecha de nacimiento no es válida.</p>';
                } else {
                    $resultado = pg_query_params(
                        $conexion,
                        "UPDATE persona
                         SET nombre = NULLIF($2, ''),
                             apellido_1 = NULLIF($3, ''),
                             apellido_2 = NULLIF($4, ''),
                             fecha_nacimiento = NULLIF($5, '')::date
                         WHERE dni = $1",
                        [$dni, $nombre, $apellido_1, $apellido_2, $fecha_nacimiento]
                    );

                    if ($resultado) {
                        echo '<p>Los datos se han actualizado correctamente.</p>';
                    } else {
                        echo '<p>Error al actualizar los datos: ' . htmlspecialchars(pg_last_error($conexion)) . '</p>';
                    }
                }
            } else {
                // Primera fase: buscar la persona y mostrar el formulario de edición
                $resultado = pg_query_params(
                    $conexion,
                    "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento FROM persona WHERE dni = $1",
                    [$dni]
                );

                if (!$resultado) {
                    die('<p>Error al ejecutar la consulta: ' . htmlspecialchars(pg_last_error($conexion)) . '</p>');
                }

                if (pg_num_rows($resultado) === 0) {
                    echo '<p>No se encontró ninguna persona con ese DNI.</p>';
                } else {
                    $fila = pg_fetch_assoc($resultado);
                    ?>
                    <form method="post" action="procesar_actualizar.php">
                        <input type="hidden" name="actualizar" value="1">

                        <label for="dni">DNI:</label>
                        <input type="text" id="dni" name="dni" value="<?php echo htmlspecialchars($fila['dni']); ?>" readonly>
                        <br>

                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($fila['nombre'] ?? ''); ?>">
                        <br>

                        <label for="apellido_1">Apellido Primero:</label>
                        <input type="text" id="apellido_1" name="apellido_1" value="<?php echo htmlspecialchars($fila['apellido_1'] ?? ''); ?>">
                        <br>

                        <label for="apellido_2">Apellido Segundo:</label>
                        <input type="text" id="apellido_2" name="apellido_2" value="<?php echo htmlspecialchars($fila['apellido_2'] ?? ''); ?>">
                        <br>

                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo htmlspecialchars($fila['fecha_nacimiento'] ?? ''); ?>">
                        <br>

                        <button type="submit">Actualizar</button>
                    </form>
                    <?php
                }
            }

            pg_close($conexion);
        }
    ?>

    <p><a href="seleccionar_dni_actualizar.php">Actualizar otra persona</a></p>
    <p><a href="../index.php">Volver a index.php</a></p>

</body>
</html>
