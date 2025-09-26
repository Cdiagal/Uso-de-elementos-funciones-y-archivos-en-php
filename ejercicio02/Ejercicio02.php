<?php
/**
 * Ejercicio 02- Guardar números en un fichero.
 * Enunciado: Almacena en numeros.txt los números del 1 al 10 (cada número en una línea). Luego léelo y muestra todos los números.
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */

$fichero = fopen("numeros.txt", "w");


for ($i = 1; $i <= 10; $i++) {
    fwrite($fichero, $i . PHP_EOL);
}

fclose($fichero);


$lineas = file("numeros.txt");


foreach ($lineas as $linea) {
    echo $linea;
}

?>