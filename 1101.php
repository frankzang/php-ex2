<?php

while (true) {
    $m = intval(readline("Enter the value of M: "));
    $n = intval(readline("Enter the value of N: "));

    if ($m <= 0 || $n <= 0) {
        break;
    }

    $start = min($m, $n);
    $end = max($m, $n);
    $sum = 0;

    for ($i = $start; $i <= $end; $i++) {
        echo $i;
        $sum += $i;
        if ($i < $end) {
            echo " ";
        }
    }

    echo " Sum=$sum\n";
}

?>
