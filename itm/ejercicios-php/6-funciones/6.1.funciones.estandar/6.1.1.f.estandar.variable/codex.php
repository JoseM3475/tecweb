<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo funciones estandar para variables:<br>
Su estructura es: <br><br>

\$colores = [verde, rojo, azul];<br>
'foreach' (\$colores as \$color){<br>
 'echo' \$color;
}
<br><br>
Un array normal tiene una serie de variables que ordena automáticamente de forma cardinal, del primero al último y asignando valores numéricos.<br>
Permite que operemos pidiendo simplemente el lugar del valor en el índice que él mismo crea. Por ejemplo [verde,rojo,azul]:<br><br>";

$colores = ["verde","rojo","azul"];
foreach ($colores as $color){

    echo $color. "<br>";
}
echo "<br>";
echo "El array ya determina el orden de los elementos que contiene y los enumera<br>";
?>