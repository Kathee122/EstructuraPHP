<?php

function invertirLista($array) {
    $lista_invertida = array(); // Creamos un nuevo array para almacenar la lista invertida
    
    // Recorremos el array original desde el último elemento hasta el primero
    for ($contador = count($array) - 1; $contador >= 0; $contador--) {
        // Añadimos cada elemento del array original al principio de la lista invertida
        $lista_invertida[] = $array[$contador];
    }
    
    return $lista_invertida;
}


$lista_original = array(1, 2, 3, 4, 5);
$lista_invertida = invertirLista($lista_original);

// Imprimimos la lista original y la lista invertida
echo "Lista original: " . implode(", ", $lista_original) . "\n";
echo "Lista invertida: " . implode(", ", $lista_invertida);
?>
