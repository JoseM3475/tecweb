<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones estandar para cadenas de texto:<br><br>";
echo "<pre>
Función----------¿Qué hace?--------------------------Ejemplo

strlen()---------Cuenta los caracteres---------------strlen(\$nombre)
substr()---------Obtiene una parte de la cadena------substr(\$nombre, 0, 3)
trim()-----------Elimina espacios--------------------trim(\$nombre)
explode()--------Separa una cadena en un array-------explode(',', \$frutas)
strtoupper()-----Convierte a mayúsculas--------------strtoupper(\$nombre)
strtolower()-----Convierte a minúsculas--------------strtolower(\$nombre)
</pre>";

echo  "Ahora un ejemplo:<br><br>

\$nombre = ''juan'';<br>
\$frutas = ''manzana,pera,plátano'';<br><br>

// 1. Quitar espacios<br>
\$nombre = trim(\$nombre);<br><br>

// 2. Convertir a mayúsculas<br>
\$nombre = strtoupper(\$nombre);<br><br>

// 3. Contar caracteres<br>
\$caracteres = strlen(\$nombre);<br><br>

// 4. Separar las frutas<br>
\$arrayFrutas = explode(",", \$frutas);<br><br>

// 5. Obtener los 3 primeros caracteres<br>
\$primeros = substr(\$nombre, 0, 3);<br><br>

'echo \$nombre ;<br>
'echo \$caracteres;<br><br>

print_r(\$arrayFrutas);<br>
echo \$primeros;<br><br>

El ejercicio final quedaría así:<br><br>";

$nombre = "juan";
$frutas = "manzana,pera,plátano";

// 1. Quitar espacios
$nombre = trim($nombre);

// 2. Convertir a mayúsculas
$nombre = strtoupper($nombre);

// 3. Contar caracteres
$caracteres = strlen($nombre);

// 4. Separar las frutas
$arrayFrutas = explode(",", $frutas);

// 5. Obtener los 3 primeros caracteres
$primeros = substr($nombre, 0, 3);

echo $nombre . "<br>";
echo $caracteres . "<br>";

print_r($arrayFrutas);
echo "<br>";

echo $primeros. "<br><br>";

echo "Aviso, para mostrar un array no se debe utilizar ''echo'', ya que NO está pensado para eso.<br>
Se debe emplear ''print_r'', que es específico para arrays.";

?>