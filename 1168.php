<?php

function calculateLeds(int $number): int {
    $ledsPerDigit = [
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    ];

    $totalLeds = 0;

    $digits = str_split(strval($number));

    foreach ($digits as $digit) {
        $totalLeds += $ledsPerDigit[$digit];
    }

    return $totalLeds;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $number = intval(trim(fgets(STDIN)));

    $ledCount = calculateLeds($number);

    echo $ledCount . " leds\n";
}
?>
