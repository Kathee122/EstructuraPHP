<?php

function sumarNumerosPares($array) {
    $suma = 0;

    foreach ($array as $numero) {
        // Comprobamos si el número es par
        if ($numero % 2 == 0) {
            // Sumamos el número a la suma total
            $suma += $numero;
        }
    }

    return $suma;
}

$lista_numeros = array(1, 2, 3, 4, 5, 6);
$suma_pares = sumarNumerosPares($lista_numeros);

echo "Suma de números pares: " . $suma_pares;
?>
