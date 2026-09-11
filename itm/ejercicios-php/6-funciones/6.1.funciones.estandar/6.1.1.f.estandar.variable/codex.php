<?php

echo "Hola mundo, soy un archivo PHP apto para servidores y contengo varias funciones estandar que actúan sobre variables:<br><br>";

echo "<pre>
Función----------¿Qué comprueba?----------Ejemplo

empty()----------Si está vacía-----------empty(\$nombre)
isset()----------Si contiene un valor----isset(\$nombre)
is_int()---------Si es entero------------is_int(10)
is_numeric()-----Si es numérico-----------is_numeric('25')
is_string()------Si es texto--------------is_string('Hola')
is_array()-------Si es un array-----------is_array([1, 2])
</pre>";

echo "<br>";

echo "La estructura general es simple, creamos una función (function) con una variable y después le pedimos que nos devuelva algo.<br>
Lo único ''nuevo'' es que es necesario incluir un (return) para que devuelva lo que pedimos:<br><br>

// 1. Comprobar si una variable está vacía<br>
function estaVacia(\$variable) {<br>
    return empty(\$variable);<br>
}<br><br>

// 2. Comprobar si una variable está definida<br>
function estaDefinida(\$variable) {<br>
    return isset(\$variable);<br>
}<br><br>

// 3. Comprobar si una variable es un entero<br>
function esEntero(\$variable) {<br>
    return is_int(\$variable);<br>
}<br><br>

// 4. Comprobar si una variable es numérica<br>
function esNumerico(\$variable) {<br>
    return is_numeric(\$variable);<br>
}<br><br>

// 5. Comprobar si una variable es una cadena de texto<br>
function esCadena(\$variable) {<br>
    return is_string(\$variable);<br>
}<br><br>

// 6. Comprobar si una variable es un array<br>
function esArray(\$variable) {<br>
    return is_array(\$variable);<br>
}<br><br>

Importante: isset() y empty() tienen un comportamiento especial en PHP:<br> 
No es recomendable envolver una variable que podría no existir directamente en una función propia como estaDefinida(\$variable), porque PHP intentará evaluar $variable antes de llamar a la función.<br>
Para comprobar variables potencialmente inexistentes, usa directamente isset(\$variable) o empty(\$variable).";

?>