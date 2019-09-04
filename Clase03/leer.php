<?php
$archivo = "archivo.txt";
$ar = fopen($archivo,"r");  
$miarray = array();
// echo (fread($ar,filesize("archivo.txt")));
//
while(!feof($ar))
{
    array_push($miarray,json_decode(fgets($ar))); 
}

var_dump($miarray);

// $decode = fread($ar,filesize("archivo.txt"));
// echo(json_decode($decode));
fclose($ar);

?>