<?php

$x = intval(readline("Digite o valor de X: "));
$y = intval(readline("Digite o valor de Y: "));

$sum = 0;

if ($x < $y) {
    for ($i = $x + 1; $i < $y; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
} else {
    for ($i = $y + 1; $i < $x; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
}

echo "A soma dos números ímpares entre $x e $y é: $sum\n";

?>
