<?php

/*
    - Sukurti papildomą antra programos versiją skaičių intervalui skaičiuoti
        (pvz.: nuo 1 iki 10^6, įvedamos reikšmės) kaip rezultatą išsaugant iteracijų kiekį ir
        maksimalią reikšmę. Saugoti į masyvą.
    - Išvesti 3 rezultatus: skaičius (išvestį patį skaičių) turinčius
        didžiausią pasiektą reikšmę,  daugiausiai ir mažiausiai iteracijų.
 */

$from = 10;
$to = 20;

// Idedamas patikrinimas, praverstu jeigu tai būtų naudojama funkcijoje.
if ($from > $to) die('$from reikšmė negali būti didesnė nei $to.');
if ($from < 1) die('$from reikšmė negali būti mažesnė nei 1.');
if ($to > 10**6) die('$from reikšmė negali būti didesnė nei 10^6.');

$max_numbers = [];
$maxIterations = 0;
$minIterations = PHP_INT_MAX;

echo "Intervalas: $from -> $to".PHP_EOL;

for ($i = $from; $i <= $to; $i++) {
    $number = $i;
    $max_number = $number;
    $current_iterations = 0;
    while ($number !== 1) {
        if ($number % 2 == 0)
            $number /= 2;
        else
            $number = 3 * $number + 1;
        $max_number = max($max_number, $number);
        $current_iterations++;
    }
    $max_numbers[$current_iterations] = $max_number;
    $maxIterations = max($maxIterations, $current_iterations);
    $minIterations = min($minIterations, $current_iterations);
}

echo 'Didžiausi skaičiai: '.PHP_EOL;
$i = 1;
foreach ($max_numbers as $iteration => $number) {
    echo " * $i ciklas: $number ($iteration iteracijų)".PHP_EOL;
    $i++;
}
echo 'Daugiausia iteracijų: '.$maxIterations.PHP_EOL;
echo 'Mažiausia iteracijų: '.$minIterations.PHP_EOL;