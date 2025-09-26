<?php
/**
 * Ejercicio 03- Contar palabras en un fichero.
 * Escribe un texto en texto.txt, luego haz que tu programa cuente cuántas palabras contiene ese archivo.
 * Funciones sugeridas: file_get_contents, str_word_count.
 * 
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */

file_put_contents ("texto.txt" , "hola desde php");

$contenido = file_get_contents("texto.txt");

$conteo = str_word_count($contenido);

echo $contenido . PHP_EOL;

echo "La frase tiene " . $conteo . " palabras." . PHP_EOL;

?>


