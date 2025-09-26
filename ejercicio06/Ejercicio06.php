<?php
/**
 * Ejercicio 06 - Invertir el contenido de un fichero a otro.
 * nunciado: Lee frase.txt, invierte el texto y guarda el resultado en frase_invertida.txt.
 * Funciones sugeridas: file_get_contents, strrev, file_put_contents
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */

file_put_contents ("frase.txt" , "Hola PHP");

$frase = file_get_contents("frase.txt");


$fraseReves = strrev ($frase);

file_put_contents("frase_reves.txt" , $fraseReves);

echo "Frase principal: " . $frase . PHP_EOL;
echo "Frase del revés: " . $fraseReves . PHP_EOL;

?>