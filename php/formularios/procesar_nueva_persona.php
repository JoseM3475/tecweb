<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado alta de persona</title>
</head>
<body>

    <h1>Resultado del alta</h1>

    <?php
        $dni = trim($_POST['dni'] ?? '');
        $nombre = trim($_POST['nombre'] ?? '');
        $apellido_1 = trim($_POST['apellido_1'] ?? '');
        $apellido_2 = trim($_POST['apellido_2'] ?? '');
        $fecha_nacimiento = trim($_POST['fecha_nacimiento'] ?? '');

        if (strlen($dni) !== 9) {
            echo '<p>El DNI debe tener exactamente 9 caracteres.</p>';
        } elseif ($fecha_nacimiento !== '' && !DateTime::createFromFormat('Y-m-d', $fecha_nacimiento)) {
            echo '<p>La fecha de nacimiento no es válida.</p>';
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
                echo '<p>Error al conectar con la base de datos.</p>';
            } else {
                $resultado = pg_query_params(
                    $conexion,
                    "INSERT INTO persona (dni, nombre, apellido_1, apellido_2, fecha_nacimiento)
                     VALUES ($1, NULLIF($2, ''), NULLIF($3, ''), NULLIF($4, ''), NULLIF($5, '')::date)",
                    [$dni, $nombre, $apellido_1, $apellido_2, $fecha_nacimiento]
                );

                if ($resultado) {
                    echo '<p>La persona se ha creado correctamente.</p>';
                } else {
                    echo '<p>Error al crear la persona. Comprueba que el DNI no esté ya registrado.</p>';
                }

                pg_close($conexion);
            }
        }
    ?>

    <p><a href="nueva_persona.php">Crear otra persona</a></p>
    <p><a href="../index.php">Volver a index.php</a></p>

</body>
</html>
