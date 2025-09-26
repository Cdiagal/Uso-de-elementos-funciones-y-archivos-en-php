<?php
/**
 * Ejercicio 04 - Escribir y leer un array en fichero.
 * Enunciado: Guarda un array de nombres en nombres.txt (uno por línea). Después, léelo y muéstralos en lista numerada.
 * Funciones sugeridas: fopen, fwrite, fgets
 * 
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */



$nombres = ["Ana" , "Luis" , "Marta" , "Carlos" , "Julia"];

$archivo = fopen("nombres.txt" , "w");

foreach ($nombres as $nombre) {
    fwrite($archivo , $nombre . PHP_EOL);
}

fclose($archivo);



$archivo = fopen("nombres.txt" , "r");
$contador = 1;

while (($linea=fgets($archivo)) !== false) {
    echo $contador . " " . trim($linea) . PHP_EOL;
    $contador++;
}

fclose($archivo);

echo $archivo;
?>