<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>
<body>

    <h1>Editar Persona</h1>
    <p>Ingrese el DNI de la persona que desea editar:</p>
    
    <form method="post" action="procesar_actualizar.php">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" maxlength="9" required>
        <button type="submit">Buscar</button>
    </form>

</body>
</html>