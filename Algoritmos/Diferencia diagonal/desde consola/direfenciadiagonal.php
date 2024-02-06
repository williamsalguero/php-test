<?php

// Función para leer la matriz desde un archivo txt
function leerMatrizDesdeArchivo($nombreArchivo) {
    $matriz = [];
    $archivo = fopen($nombreArchivo, "r");
    if ($archivo) {
        while (($linea = fgets($archivo)) !== false) {
            $fila = array_map('intval', explode(' ', $linea));
            $matriz[] = $fila;
        }
        fclose($archivo);
    }
    return $matriz;
}

// Función para calcular la diferencia absoluta entre las diagonales de una matriz cuadrada
function diferenciaDiagonal($matriz) {
    $n = count($matriz);
    $diagonalIzquierdaDerecha = 0;
    $diagonalDerechaIzquierda = 0;

    for ($i = 0; $i < $n; $i++) {
        $diagonalIzquierdaDerecha += $matriz[$i][$i];
        $diagonalDerechaIzquierda += $matriz[$i][$n - $i - 1];
    }

    return abs($diagonalIzquierdaDerecha - $diagonalDerechaIzquierda);
}

// Nombre de los archivos txt
$archivo1 = "test1-pruebatecnica.txt";
$archivo2 = "test2-pruebatecnica.txt";

// Leer las matrices desde los archivos
$matriz1 = leerMatrizDesdeArchivo($archivo1);
$matriz2 = leerMatrizDesdeArchivo($archivo2);

// Calcular la diferencia en diagonal para ambas matrices
$diferencia1 = diferenciaDiagonal($matriz1);
$diferencia2 = diferenciaDiagonal($matriz2);

// Mostrar los resultados
echo "Diferencia absoluta en diagonal para el archivo 1: $diferencia1\n";
echo "Diferencia absoluta en diagonal para el archivo 2: $diferencia2\n";

?>