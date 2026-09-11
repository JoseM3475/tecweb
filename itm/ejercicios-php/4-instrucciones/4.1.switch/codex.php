<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo la instrucción (SWITCH):<br>
Permite seleccionar entre posibles valores de una variable. Le indicamos una expresión que será evaluada por su valor.<br>
Luego esta se compara con otras expresiones llamadas (Case). Cuando se cumpla un (Case), se necesita un comando (Break) tras el código a realizar en el (Case).<br>
Si no se selecciona un (Case), se debe indicar una acción por defecto (Default).<br>
Ejemplo:<br>
Determinamos una variable (\$nombre) que recibe su valor del usuario (\$nombre = usuario1) y a partir de ese valor, se configura una acción:<br><br>
\$nombre = usuario1<br>
switch ($nombre) <br>
{<br>
case ''usuario1'' <br>
case ''usuario2'' <br>
case ''usuario3'' <br>
echo ''Bienvenido al programa''<br>
break;<br><br>
case ''usuario4'' <br>
case ''usuario5'' <br>
echo ''No olvidar guardar el programa''<br>
break;<br><br>
default<br>
echo ''No puedes acceder al programa sin acreditación''<br>
}<br><br>";

echo "Ahora cómo se vería:<br><br>
En el primer caso:<br>";

$nombre = "usuario1";

switch ($nombre) {
    case "usuario1":
        echo "Bienvenido al programa";
        break;

    case "usuario4":
        echo "No olvidar guardar el programa";
        break;

    default:
        echo "Usuario no reconocido";
        break;
}

echo "<br><br>
En el segundo caso:<br>";
$nombre = "usuario4";

switch ($nombre) {
    case "usuario1":
        echo "Bienvenido al programa";
        break;

    case "usuario4":
        echo "No olvidar guardar el programa";
        break;

    default:
        echo "Usuario no reconocido";
        break;
}

echo "<br><br>
En ningún caso:<br>";
$nombre = "usuario0";

switch ($nombre) {
    case "usuario1":
        echo "Bienvenido al programa";
        break;

    case "usuario4":
        echo "No olvidar guardar el programa";
        break;

    default:
        echo "Usuario no reconocido";
        break;
}
?>



