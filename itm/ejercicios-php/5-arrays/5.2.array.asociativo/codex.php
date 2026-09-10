<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo un array asociativo:<br>
Su estructura es: <br><br>

\$persona = [<br>
    'nombre' => 'Juan',<br>
    'edad' => 20,<br>
    'ciudad' => 'Madrid'<br>
];<br>

'foreach' (\$persona as \$clave => \$valor) {<br>
    'echo' '\$clave':.'\$valor'<br>
}

<br><br>
Un array asociativo tiene una serie de variables que que obtienen un valor por parte del usuario. No necesita enumerar, sino que al indicársele una variable, nos trae lo que vale.<br>
Permite que operemos pidiendo simplemente el nombre del valor en cuestión.<br>
La variable \$persona tiene elementos con valores. Necesitamos ''extraer'' dichos valores asociándolos a unos parámetros con su nombre propio. Por ejemplo [Juan,20,Madrid]:<br>
Creamos un nombre llamado ''nombre'' para Juan, otro llamado ''edad'' para 20 y otro llamado ''ciudad'' para Madrid.<br>
Acto seguido empleamos el 'foreach' para pasar el array (\$persona) a sus elementos (\$clave) y de paso pedir que nos de el valor asociado (\$valor).<br>
Como se trata de un 'foreach', el array pondrá todos los valores de \$clave en orden vertical (con la etiqueta de BR) junto con su valor.<br>
Cada elemento dentro del array (nombre,edad y ciudad) pasan a ser dicha \$clave y cada una debe darnos su valor (Juan,20 y Madrid)<br><br>";

$persona = [
    "nombre" => "Juan",
    "edad" => 20,
    "ciudad" => "Madrid"
];

foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}

echo "<br>";
echo "El array tiene un valor que pasa a ser ''desglosado'' en otro que contiene su nombre el cual invocamos.<br>
En lugar de emplear ( = ) se emplea ( => ) porque ya le decimos al programa que se trata de un array asociativo con sus parámetros<br>";
?>