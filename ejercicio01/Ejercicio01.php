<?php
/**
 * Ejercicio 01- Crea un fichero datos.txt con el texto "Hola Mundo desde PHP" y, a continuación, léelo y muestra su contenido por pantalla.
 * 
 * @author: cdiagal
 * @version: 1.0.0
 */

file_put_contents("datos.txt", "Hola Mundo desde PHP");

$saludo = file_get_contents("datos.txt");

echo ($saludo);


?>