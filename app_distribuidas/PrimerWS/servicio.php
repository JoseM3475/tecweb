<?php

include_once 'lib/nusoap.php';

$servicio = new soap_server();

$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb", $ns);

$servicio->schemaTargetNamespace = $ns;

$servicio->register(
    "MiFuncion",                 // nombre de la función
    array("miparametro" => "xsd:string"), // parámetros de entrada
    array("return" => "xsd:string"), // parámetros de salida
    $ns                          // namespace
);

function miFuncion($miparametro) {
    $resultado = "Mi parametro recibido es " . $miparametro;
    return $resultado;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$servicio->service($HTTP_RAW_POST_DATA);

?>