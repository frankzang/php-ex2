<?php

function gcd(int $a, int $b): int {
    while ($b != 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
    return $a;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    list($f1, $f2) = explode(" ", trim(fgets(STDIN)));

    $maxStackSize = gcd($f1, $f2);

    echo $maxStackSize . "\n";
}

?>
