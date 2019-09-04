<?php
$obj = new stdClass();
// echo($_GET['nombre']);
// $obj['nom'] = $_GET['nombre'];
$obj->nombre = $_GET['nombre'];;
$obj->apellido = $_GET['apellido'];;
$codificado = json_encode($obj);
$archivo = "archivo.txt";
$modo = "a";
$ar = fopen($archivo,$modo);  
// fwrite($ar,"[".$codificado."]".",");
fwrite($ar,$codificado.PHP_EOL);
fclose($ar);
//
?>