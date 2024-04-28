<?php

function frecuenciaCaracteres($cadena) {
    $frecuencia = array();

    // Recorremos cada carácter de la cadena
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // Si el carácter ya existe en el array, incrementamos su frecuencia
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            // Si el carácter no existe en el array, lo añadimos con una frecuencia de 1
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

$cadena = "Hola mundo";
$frecuencia = frecuenciaCaracteres($cadena);

// Imprimimos la frecuencia de cada carácter
foreach ($frecuencia as $caracter => $frec) {
    echo "Carácter '$caracter' aparece $frec veces.\n";
}
?>
