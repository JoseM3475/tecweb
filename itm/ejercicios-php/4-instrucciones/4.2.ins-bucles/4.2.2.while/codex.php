<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador en bucle WHILE:<br>
Su estructura es: <br><br>

while (condición) {<br>
    // código que se repite<br>
}
<br><br>

Con valores desde una variable (\$numero = 0) sería así:<br><br>

while (\$numero < = 10) {<br>
    echo \$numero .<br>
    \$numero + +; <br>
}'
<br><br>

En este caso tenemos un típico bucle contador. Le diremos que cuente desde el (1) hasta el (10) y nos muestre los pasos. Queda así: <br><br>";

$n = 1;

while ($n <= 10) {
    echo $n . "<br>";
    $n++;
}

?>