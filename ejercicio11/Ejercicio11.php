<?php
/**
 * Ejercicio 11 - Diario personal secreto.
 * Enunciado: Enunciado: Guarda entradas con fecha y hora en diario.txt. Luego muéstralas todas.
 * @author: cdiagal
 * @version: 1.0.0
 */


$textoEntrada = "Hoy aprendí PHP con ficheros";

$fecha = date("Y-m-d H:i");

$archivo = fopen ("diario.txt" , "a");

fwrite($archivo , "[$fecha] $textoEntrada" . PHP_EOL);
fclose($archivo);

$entradas = file("diario.txt");

echo "Diario secreto: " . PHP_EOL;

foreach ($entradas as $linea) {
    echo trim($linea) . PHP_EOL;
}

?>