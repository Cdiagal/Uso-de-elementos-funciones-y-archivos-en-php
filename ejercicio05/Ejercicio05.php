<?php
/**
 * Ejercicio 05 - Copia contenido de un fichero a otro.
 * Enunciado: Copia el contenido de origen.txt en un archivo copia.txt.
 * Funciones sugeridas: copy, file_get_contents, file_put_contents
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */

file_put_contents("origen.txt" , "Este es el archivo original.");


$contenido = file_get_contents("origen.txt");

file_put_contents("copia.txt" , $contenido);

echo "origen.txt" . PHP_EOL;
echo file_get_contents ("origen.txt" ). PHP_EOL;

echo "copia.txt" . PHP_EOL;
echo file_get_contents ("copia.txt" ). PHP_EOL;

?>