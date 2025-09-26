<?php
/**
 * Ejercicio 10 - Leer JSON desde fichero.
 * Enunciado: Crea datos.json con información de personas (nombre y edad). Haz que el programa lo lea y muestre los datos.
 * Funciones sugeridas: file_get_contents, json_decode
 * @author: cdiagal
 * @version: 1.0.0
 */


$archivo = "datos.json";

$contenido = file_get_contents($archivo);

$solucion = json_decode($contenido);







?>