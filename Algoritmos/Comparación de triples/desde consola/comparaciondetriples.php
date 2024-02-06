<?php

// Función para leer los arrays desde un archivo txt
function leerArraysDesdeArchivo($nombreArchivo) {
    $arrays = [];
    $archivo = fopen($nombreArchivo, "r");
    if ($archivo) {
        while (($linea = fgets($archivo)) !== false) {
            $array = array_map('intval', explode(',', str_replace(['[', ']'], '', $linea)));
            $arrays[] = $array;
        }
        fclose($archivo);
    }
    return $arrays;
}

// Función para comparar los arrays a y b y calcular los puntos de comparación
function compararArrays($a, $b) {
    $puntosA = 0;
    $puntosB = 0;

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $puntosA++;
        } elseif ($a[$i] < $b[$i]) {
            $puntosB++;
        }
    }

    return [$puntosA, $puntosB];
}

// Nombre de los archivos txt
$archivo1 = "test1-ejercicio2-pruebatecnica.txt";
$archivo2 = "test2-ejercicio2-pruebatecnica.txt";

// Leer los arrays desde los archivos
$datos1 = leerArraysDesdeArchivo($archivo1);
$datos2 = leerArraysDesdeArchivo($archivo2);

// Comparar los arrays y calcular los puntos de comparación
$puntos1 = compararArrays($datos1[0], $datos1[1]);
$puntos2 = compararArrays($datos2[0], $datos2[1]);

// Mostrar los resultados
echo "Puntos de comparación para el archivo 1: " . implode(", ", $puntos1) . "\n";
echo "Puntos de comparación para el archivo 2: " . implode(", ", $puntos2) . "\n";

?>