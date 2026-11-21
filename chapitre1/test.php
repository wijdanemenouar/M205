<?php
declare(strict_types=1);

require_once __DIR__ . '/fonction.php';

echo "--- Étape 1 : Quatre opérations ---" . PHP_EOL;
echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 * 8 = " . multiplier(12, 8) . PHP_EOL;
echo "20 / 4 = " . diviser(20, 4) . PHP_EOL;

try {
    echo diviser(10, 0) . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}

echo PHP_EOL . "--- Étape 2 : Fonctions logiques ---" . PHP_EOL;
echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;
echo "5 est positif ? " . (estPositif(5) ? "oui" : "non") . PHP_EOL;
echo "Max(3, 9, 5) sans max() = " . maximumSansMax(3, 9, 5) . PHP_EOL;
echo "Max(3, 9, 5) avec max() = " . maximum(3, 9, 5) . PHP_EOL;
echo "17 est premier ? " . (estPremier(17) ? "oui" : "non") . PHP_EOL;

echo PHP_EOL . "--- Étape 3 : Calculs commerciaux ---" . PHP_EOL;
$facture = calculerFacture(100, 10, 10, 20);
echo "Facture : " . number_format($facture, 2, ",", " ") . " MAD" . PHP_EOL;

echo PHP_EOL . "--- Étape 4 : Statistiques et géométrie ---" . PHP_EOL;
echo "Moyenne (12, 15, 18) = " . round(moyenne(12, 15, 18), 2) . PHP_EOL;
echo "Aire cercle (r=5) = " . aireCercle(5) . " | Périmètre = " . perimetreCercle(5) . PHP_EOL;
echo "25°C en Fahrenheit = " . celsiusVersFahrenheit(25) . "°F" . PHP_EOL;
echo "100 MAD en EUR = " . convertirDevise(100, 0.092) . " EUR" . PHP_EOL;

echo PHP_EOL . "--- Étape 5 : Fonctions à boucle ---" . PHP_EOL;
echo "5! = " . factorielle(5) . PHP_EOL;
echo "Fibonacci (8) : " . implode(", ", fibonacci(8)) . PHP_EOL;
echo "PGCD(48, 18) = " . pgcd(48, 18) . PHP_EOL;
echo "2^5 (boucle) = " . puissance(2, 5) . " | (récursif) = " . puissanceRecursive(2, 5) . PHP_EOL;