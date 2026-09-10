<?php


include "utilidades.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $ap1 = $_POST["ap1"];
    $ap2 = $_POST["ap2"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $meses = $_POST["meses"];

    $mayor = es_mayor_de_edad($edad);

    if($mayor == true){
        echo('<h1>Datos introducidos</h1>');

        echo('Nombre: ' . $nombre . '<br>');
        echo('Apellido 1: ' . $ap1. '<br>');
        echo('Apellido 2: ' . $ap2. '<br>');
        echo('Edad: ' . $edad . ', es mayor de edad'. '<br>');
        echo('Sexo: ' . $sexo. '<br>');
        echo('Meses que solicita sus vacaciones: ');
            foreach ($meses as $indice => $mes) {
                if ($indice < count($meses) - 1) {
                    echo $mes . ', ';
                } else {
                    echo $mes;
                }
            }

    }else{
       echo('<h1>Datos introducidos</h1>');

        echo('Nombre: ' . $nombre . '<br>');
        echo('Apellido 1: ' . $ap1. '<br>');
        echo('Apellido 2: ' . $ap2. '<br>');
        echo('Edad: ' . $edad . ', es mayor de edad'. '<br>');
        echo('Sexo:' . $sexo. '<br>');
        echo('Meses que solicita sus vacaciones: ');
            foreach ($meses as $indice => $mes) {
                if ($indice < count($meses) - 1) {
                    echo $mes . ', ';
                } else {
                    echo $mes;
                }
            }
    }

    }else{
    echo('Método incorrecto al enviar el formulario');
}

?>