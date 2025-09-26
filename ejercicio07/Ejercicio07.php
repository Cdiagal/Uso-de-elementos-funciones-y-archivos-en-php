<?php
/**
 * Ejercicio 07 - Carlcula suma desde fichero.
 * Enunciado: Guarda números separados por comas en datos_numericos.txt. Léelos y calcula su suma.
 * Funciones sugeridas: file_get_contents, explode, array_sum
 * @author: cdiagal
 * @version: 1.0.0
 */

file_put_contents("datos_numericos.txt" , "10,20,30,40");

$contenidoTxt = file_get_contents("datos_numericos.txt");

$conversionArray = explode ("," , $contenidoTxt);

$sumaArray = array_sum ($conversionArray);


echo "Contenido original: " . $contenidoTxt . PHP_EOL;

echo "Contenido del array: " . implode(", " , $conversionArray)  .PHP_EOL;

echo "Suma de los número total: " . $sumaArray . PHP_EOL;

?>

