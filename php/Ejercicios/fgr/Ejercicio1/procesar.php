<?php


include "utilidades.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"];
    $ap1 = $_POST["ap1"];
    $ap2 = $_POST["ap2"];
    $edad = $_POST["edad"];

    $mayor = es_mayor_de_edad($edad);

    if($mayor == true){
        echo('Hola ' . $nombre . ' ' . $ap1 . ' ' . $ap2 . ' tienes ' . $edad . ' años y eres mayor de edad');
    }else{
    echo('Hola ' . $nombre . ' ' . $ap1 . ' ' . $ap2 . ' tienes ' . $edad . ' años y eres menor de edad');
    }

    

}else{
    echo('Método incorrecto al enviar el formulario');
}

?>