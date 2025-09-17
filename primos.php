<?php

/**
 * Función para determinar si un número dado es primo o no
 * Un número primo es aquel que solo es divisible por 1 y por sí mismo
 *
 */
function esPrimo($numero) {
    // Los números menores o iguales a 1 no son primos
    if ($numero <= 1) {
        return false;
    }

    // El número 2 es el único número primo par
    if ($numero == 2) {
        return true;
    }

    // Los números pares (excepto el 2) no son primos
    if ($numero % 2 == 0) {
        return false;
    }

    // Verificamos divisibilidad desde 3 hasta la raíz cuadrada del número
    // Solo verificamos números impares para optimizar el algoritmo
    for ($i = 3; $i * $i <= $numero; $i += 2) {
        // Si el número es divisible por algún valor, no es primo
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no encontramos divisores, el número es primo
    return true;
}

/**
 * Función auxiliar para mostrar si un número es primo o no
 */
function verificarPrimo($numero) {
    if (esPrimo($numero)) {
        echo "$numero es un número primo.\n";
    } else {
        echo "$numero NO es un número primo.\n";
    }
}

// Ejemplos de uso de la función
echo "=== Verificación de Números Primos ===\n\n";

// Probamos varios números para demostrar la función
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 17, 19, 25, 29, 97];

foreach ($numeros as $num) {
    verificarPrimo($num);
}

// Ejemplo adicional: encontrar todos los primos hasta un número dado
echo "\n=== Números primos del 1 al 30 ===\n";
$primos = [];
for ($i = 1; $i <= 30; $i++) {
    if (esPrimo($i)) {
        $primos[] = $i;
    }
}

echo "Primos encontrados: " . implode(", ", $primos) . "\n";

?>