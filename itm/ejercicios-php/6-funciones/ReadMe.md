Una función en PHP es un bloque de código que preparas para realizar una tarea concreta y que puedes usar varias veces sin tener que escribir el código de nuevo.

function saludar() {
    echo "Hola";
}

saludar();

Puede tener un dato asociado

$nombre="Juan";
function saludar($nombre) {
    echo "Hola " . $nombre;
}

saludar("Juan");




