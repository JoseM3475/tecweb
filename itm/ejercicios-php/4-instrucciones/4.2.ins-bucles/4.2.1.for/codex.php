<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador en bucle FOR:<br>
Su estructura es: <br><br>

for (inicio; condición; incremento) {
    // código que se repite
}
<br><br>

En este caso tenemos un típico bucle contador. Le diremos que cuente desde el (1) hasta el (10) y nos muestre los pasos. Queda así: <br><br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}




?>