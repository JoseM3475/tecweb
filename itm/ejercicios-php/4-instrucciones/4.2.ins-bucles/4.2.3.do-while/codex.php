<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo el operador en bucle DO-WHILE:<br>
Su estructura es: <br><br>

do {<br>
    // código<br>
} while (condición);<br>

<br><br>

Con valores desde una variable (\$numero = 1) sería así:<br><br>

\$numero = 1;

do {<br>
    'echo' \$numero.; <br>
    \$numero++;<br>
} while (\$numero < = 10);
<br><br>
O así si queremos el paso falso:<br><br>

\$numero = 0;

do {<br>
\$numero++;<br>
    'echo' \$numero.; <br>
    } while (\$numero < = 10);
<br><br>

En este caso tenemos un típico bucle contador. Le diremos que cuente desde el (1) hasta el (10) y nos muestre los pasos, incluído el que queda fuera. Queda así: <br><br>";


$numero = 0;

do {
    $numero++;
    echo $numero . "<br>";
    
} while ($numero <= 10);

echo "Están las instrucciones (Break) y (Continue) en caso de que queramos parar un proceso independientemente de si se cumple el objetivo<br>
o de continuarlo aunque se haya llegado a verificar o falsear el mismo"
?>
