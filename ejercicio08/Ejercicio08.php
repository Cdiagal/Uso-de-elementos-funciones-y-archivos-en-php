<?php
/**
 * Ejercicio 08 - Crear un fichero de multiplicaciones.
 * Enunciado: Genera la tabla del 5 y guárdala en tabla5.txt. Luego muéstrala.
 * Funciones sugeridas: fopen, fwrite, file
 * @author: cdiagal
 * @version: 1.0.0
 */

$archivo = fopen("tabla5.txt" , "w");

for ($i=0; $i <= 10; $i++) { 
    $linea = "5 x $i = " . (5*$i) . PHP_EOL;
    fwrite($archivo,$linea);
}

fclose($archivo);


$contenido = file ("tabla5.txt");

echo "Contenido del archivo: " . PHP_EOL;

foreach ($contenido as $linea) {
    echo $linea;
}