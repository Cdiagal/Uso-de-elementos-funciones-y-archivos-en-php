<?php

/**
 * Ejercicio 14 - Generador de excusas divertidas.
 * Lee excusas desde excusas.txt y saca una al azar.
 * 
 * @author cdiagal
 * @version 1.0.0
 */

file_put_contents("excusas.txt" , "Mi perro se comió la cartera\n El Wi-fi decidió tomarse el día libre\n Me abdujeron los marcianos
                    El despertador no me sonó\n");

$excusas = file("excusas.txt");

$indice = array_rand($excusas);

echo "Y la excusa de hoy es...: " . $excusas[$indice];

