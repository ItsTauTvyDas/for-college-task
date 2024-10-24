<?php

/*
    - Sukurti programą skirtą skaičiuoti matematinei funkcijai 3x+1
    - Veikimą išbandyti su vienu skaičiumi ir išspausdinti visas reikšmes.
    - Suskaičiuoti iteracijų kiekį.
 */

$number = 5;

echo 'Ivestas skaičius: ' . $number . '<br>';
$i = 0; // Pradedam nuo 1
while ($number !== 1) {
    if ($number % 2 == 0)
        $number /= 2;
    else
        $number = 3 * $number + 1;
    echo ($i + 1) . ') ' . $number . '<br>';
    $i++;
}
// Išminusuojam, nes pradėta buvo nuo 1
echo 'Iteracijų skaičius: ' . $i . '<br>';