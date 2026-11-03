<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera página PHP — Dark Sanguinario</title>

    <style>
        body {
            font-family: "Courier New", monospace;
            background: #0b0000; /* negro rojizo */
            color: #ff1a1a; /* rojo sangre estilizado */
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #ff1a1a;
            text-shadow: 0 0 15px #ff0000, 0 0 30px #660000;
            font-size: 36px;
            letter-spacing: 2px;
        }

        .tabla-container {
            margin: 20px auto;
            width: 95%;
            max-width: 1000px;
            background: #1a0000; /* panel oscuro rojizo */
            padding: 20px;
            border: 2px solid #ff0000;
            border-radius: 8px;
            box-shadow: 0 0 25px #ff0000, inset 0 0 15px #330000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background: #330000;
            color: #ff4d4d;
            padding: 12px;
            border-bottom: 2px solid #ff0000;
            text-shadow: 0 0 10px #ff0000;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #660000;
        }

        tr:hover {
            background: #260000;
            box-shadow: inset 0 0 10px #ff0000;
        }

        .ok {
            color: #ff4d4d;
            font-weight: bold;
            text-shadow: 0 0 10px #ff0000;
        }

        /* Selector infernal */
        select {
            background: #330000;
            color: #ff4d4d;
            border: 1px solid #ff0000;
            padding: 5px;
            font-family: "Courier New", monospace;
            border-radius: 4px;
            text-shadow: 0 0 5px #ff0000;
        }

        label {
            color: #ff4d4d;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Mi primera página PHP — Dark Sanguinario</h1>

<div class="tabla-container">

<?php
$conexion = pg_connect(
    "host=" . getenv("DB_HOST") .
    " port=" . getenv("DB_PORT") .
    " dbname=" . getenv("DB_NAME") .
    " user=" . getenv("DB_USER") .
    " password=" . getenv("DB_PASSWORD") .
    " sslmode=require"
);

if (!$conexion) {
    die("<p>Error al conectar con la base de datos.</p>");
}

echo "<p class='ok'>[OK] Conexión establecida correctamente.</p>";

$orden = $_GET['orden'] ?? 'fecha';

switch ($orden) {
    case 'dni': $orderBy = "ORDER BY dni"; break;
    case 'nombre': $orderBy = "ORDER BY nombre"; break;
    case 'apellidos': $orderBy = "ORDER BY apellido_1, apellido_2"; break;
    default: $orderBy = "ORDER BY fecha_nacimiento DESC";
}
?>

<form method="GET" style="margin-bottom: 20px;">
    <label>Ordenar por:</label>
    <select name="orden" onchange="this.form.submit()">
        <option value="fecha" <?= $orden=='fecha'?'selected':'' ?>>Fecha de nacimiento</option>
        <option value="dni" <?= $orden=='dni'?'selected':'' ?>>DNI</option>
        <option value="nombre" <?= $orden=='nombre'?'selected':'' ?>>Nombre</option>
        <option value="apellidos" <?= $orden=='apellidos'?'selected':'' ?>>Apellidos</option>
    </select>
</form>

<?php
$resultado = pg_query($conexion,
    "SELECT dni, nombre, apellido_1, apellido_2, fecha_nacimiento 
     FROM persona 
     $orderBy"
);

if (!$resultado) {
    die("<p>Error al ejecutar la consulta.</p>");
}

echo "<table>";
echo "<tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Fecha de nacimiento</th>
      </tr>";

while ($fila = pg_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['dni']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['apellido_1']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['apellido_2']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['fecha_nacimiento']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</div>

</body>
</html>
