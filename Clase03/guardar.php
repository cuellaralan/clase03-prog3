<?php
include_once './funciones.php';
$obj = new stdClass();
// echo($_GET['nombre']);
// $obj['nom'] = $_GET['nombre'];
$obj->nombre = $_GET['nombre'];;
$obj->apellido = $_GET['apellido'];;
$codificado = json_encode($obj);
var_dump($obj);
$archivo = "archivo.txt";
$modo = "a";
// $ar = fopen($archivo,$modo);  
// fwrite($ar,"[".$codificado."]".",");
// fwrite($ar,$codificado.PHP_EOL);
// fclose($ar);
// Funciones::Guardar($obj,$archivo,$modo);
Funciones::ModificarxID(2,$obj,$archivo);

?>