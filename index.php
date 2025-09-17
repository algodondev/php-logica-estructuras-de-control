<?php

function generarFibonacci($n) {
    if ($n <= 0) {
        return [];
    }

    if ($n == 1) {
        return [0];
    }

    if ($n == 2) {
        return [0, 1];
    }

    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Ejemplo de uso
$n = 10;
$serie = generarFibonacci($n);

echo "Los primeros $n términos de la serie Fibonacci son:\n";
foreach ($serie as $index => $valor) {
    echo "F($index) = $valor\n";
}

echo "\nSerie completa: " . implode(", ", $serie) . "\n";

?>