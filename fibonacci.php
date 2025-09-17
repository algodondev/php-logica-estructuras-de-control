<?php

/**
 * Función para generar los primeros n términos de la serie Fibonacci
 * La serie Fibonacci comienza con 0 y 1, y cada término subsiguiente
 * es la suma de los dos términos anteriores
 */
function generarFibonacci($n) {
    // Validación: si n es menor o igual a 0, retornamos un array vacío
    if ($n <= 0) {
        return [];
    }

    // Caso base 1: si solo queremos 1 término, retornamos [0]
    if ($n == 1) {
        return [0];
    }

    // Caso base 2: si queremos 2 términos, retornamos [0, 1]
    if ($n == 2) {
        return [0, 1];
    }

    // Inicializamos el array con los dos primeros términos de la serie
    $fibonacci = [0, 1];

    // Bucle para calcular los términos restantes de la serie
    // Comenzamos desde el índice 2 porque ya tenemos los dos primeros
    for ($i = 2; $i < $n; $i++) {
        // Cada nuevo término es la suma de los dos términos anteriores
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Retornamos el array completo con todos los términos calculados
    return $fibonacci;
}

// Ejemplo de uso de la función
$n = 10; // Definimos cuántos términos queremos generar
$serie = generarFibonacci($n); // Llamamos a la función y guardamos el resultado

// Mostramos cada término de la serie con su posición
echo "Los primeros $n términos de la serie Fibonacci son:\n";
foreach ($serie as $index => $valor) {
    echo "F($index) = $valor\n"; // F(0)=0, F(1)=1, F(2)=1, etc.
}

// Mostramos la serie completa en una sola línea
echo "\nSerie completa: " . implode(", ", $serie) . "\n";

?>