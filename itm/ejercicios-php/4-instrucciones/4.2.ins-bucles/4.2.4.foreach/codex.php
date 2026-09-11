<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador en bucle FOREACH:<br>
Su estructura es más compleja debido a que se trata de un array. Partimos de que, por ejemplo, tenemos una lista: <br><br>
[verde, rojo, azul]<br><br>
Ahora le damos un valor al array COMPLETO:<br><br> 
\$colores = [verde, rojo, azul]<br><br>
Después introducimos el (FOREACH) y les asignamos un nombre a los valores dentro del array (\$color)<br><br>
'foreach' (\$colores as \$color){<br><br>
Pasamos a escribir en una lista vertical los valores del array (Cuenta desde 0 automáticamente)<br><br>
'echo' \$color. <br>
} 
<br><br>

La estructura simplificada sería así:<br><br>
'foreach' (\$lista as \$elemento) {<br>
    // código que queramos (En este caso ESCRIBIR el valor)<br>
}
<br><br>

En este caso iniciamos el bucle para los colores [verde,rojo,azul]. Le indicaremos que nos los escriba como una lista. Queda así: <br><br>";

$colores = ["verde","rojo","azul"];
foreach ($colores as $color){

    echo $color. "<br>";
}
echo "<br>";
echo "El array ya determina el orden de los elementos que contiene y los enumera"
?>
