<?php

/**
 * Ejercicio 12 - Ranking de videojuegos.
 * Guarda juegos con puntuaciones en ranking.txt, ordénalos y muestra el top 3.
 * 
 * @author cdiagal
 * @version 1.0.0
 */

file_put_contents("ranking.txt", "Zelda:10\n MArio: 9\n Sonic: 8\n Doom: 7\n FinalFantasy: 6");

$lineas = file("ranking.txt" );

foreach ($lineas as $linea) {
    [$juego , $puntos] = explode(":" , $linea);
    $juegos[trim($juego)] = (int) trim($puntos);
}


arsort($juegos);

echo "Top videojuegos: " . PHP_EOL;
$contador = 1;
foreach ($juegos as $juego => $puntos) {
    echo "$contador - $juego : $puntos puntos" . PHP_EOL;
    if ($contador === 3) break;
    $contador++;
}

?>