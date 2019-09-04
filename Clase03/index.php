<?php
//fopen ($archivo,$modo) ;
//R--> read
//W --> Write , si no existe crea el archivo
//A --> I-O , 
//fclose($ar) lo que devuelve el fopen;
//fwrite($ar,"texto", longitud);
//
//
//Escritura
$archivo = "archivo.txt";
$modo = "w";
$ar = fopen($archivo,$modo); // manejador 
// fopen($ar,);
fwrite($ar,"hola",4);

// copy("archivo.txt","copia.txt",);
// unlink("archivo.txt");

fclose($ar); //cierro archivo 

//lectura
$modo = "r";
$ar = fopen($archivo,$modo);
echo (fread($ar,filesize("archivo.txt")));


?>