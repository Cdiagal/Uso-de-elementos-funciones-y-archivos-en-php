<?php

/**
 * Ejercicio 13 - Canción aleatoria .
 * Guarda títulos en el archivo canciones.txt y muestra uno al azar.
 * 
 * @author cdiagal
 * @version 1.0.0
 */


file_put_contents("canciones.txt" , "Hysteria\n  Bohemian Rhapsody\n  Africa\n  Sultans of swing");


$canciones = file("canciones.txt");

$aleatoria = array_rand($canciones);

echo "Canción aleatoria: " . $canciones[$aleatoria] . PHP_EOL;

?>
