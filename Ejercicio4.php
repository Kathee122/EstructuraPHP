<?php

function imprimirPiramide($altura) {
    // Recorremos las filas de la pirámide
    for ($fila = 0; $fila < $altura; $fila++) {
        // Imprimimos espacios en blanco antes de los asteriscos para centrar la pirámide
        for ($espacios = 0; $espacios < $altura - $fila - 1; $espacios++) {
            echo " ";
        }

        // Imprimimos asteriscos para esta fila
        for ($asteriscos = 0; $asteriscos < 2 * $fila + 1; $asteriscos++) {
            echo "*";
        }

        // Imprimimos una nueva línea al final de cada fila
        echo "\n";
    }
}

$altura_piramide = 5;
imprimirPiramide($altura_piramide);
?>
