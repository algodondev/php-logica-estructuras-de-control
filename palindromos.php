<?php

/**
 * Función para determinar si una cadena de texto es un palíndromo
 * Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones
 */
function esPalindromo($texto) {
    // Convertimos el texto a minúsculas para hacer la comparación insensible a mayúsculas
    $texto = strtolower($texto);

    // Removemos espacios, signos de puntuación y caracteres especiales
    // Dejamos solo letras y números para una verificación más precisa
    $textoLimpio = preg_replace('/[^a-z0-9]/', '', $texto);

    // Obtenemos la longitud del texto limpio
    $longitud = strlen($textoLimpio);

    // Comparamos caracteres desde el inicio y el final hacia el centro
    for ($i = 0; $i < $longitud / 2; $i++) {
        // Si algún carácter no coincide, no es palíndromo
        if ($textoLimpio[$i] !== $textoLimpio[$longitud - 1 - $i]) {
            return false;
        }
    }

    // Si todos los caracteres coinciden, es un palíndromo
    return true;
}

/**
 * Función auxiliar para mostrar si un texto es palíndromo o no
 */
function verificarPalindromo($texto) {
    if (esPalindromo($texto)) {
        echo "\"$texto\" ES un palíndromo.\n";
    } else {
        echo "\"$texto\" NO es un palíndromo.\n";
    }
}

// Ejemplos de uso de la función
echo "=== Verificación de Palíndromos ===\n\n";

// Array con diferentes ejemplos para probar la función
$ejemplos = [
    "oso",                    // Palíndromo simple
    "ana",                    // Palíndromo simple
    "reconocer",              // Palíndromo más largo
    "casa",                   // No es palíndromo
    "A man a plan a canal Panama", // Palíndromo con espacios
    "race a car",             // No es palíndromo
    "Was it a rat I saw",     // Palíndromo con espacios y mayúsculas
    "hello",                  // No es palíndromo
    "Madam",                  // Palíndromo con mayúscula
    "12321",                  // Palíndromo numérico
    "12345",                  // No es palíndromo numérico
    "A Santa at NASA"         // Palíndromo con espacios
];

// Verificamos cada ejemplo
foreach ($ejemplos as $ejemplo) {
    verificarPalindromo($ejemplo);
}

// Ejemplo adicional: función para encontrar palíndromos en un array
echo "\n=== Palíndromos encontrados en la lista ===\n";
$palindromosEncontrados = [];

foreach ($ejemplos as $texto) {
    if (esPalindromo($texto)) {
        $palindromosEncontrados[] = $texto;
    }
}

echo "Total de palíndromos encontrados: " . count($palindromosEncontrados) . "\n";
foreach ($palindromosEncontrados as $palindromo) {
    echo "- \"$palindromo\"\n";
}

?>