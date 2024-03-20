<?php

function sortEvenOdd(array $values): array {
    $evens = [];
    $odds = [];

    foreach ($values as $value) {
        if ($value % 2 === 0) {
            $evens[] = $value;
        } else {
            $odds[] = $value;
        }
    }

    sort($evens);
    rsort($odds);

    return array_merge($evens, $odds);
}

$lines = intval(trim(fgets(STDIN)));
$values = [];

for ($i = 0; $i < $lines; $i++) {
    $values[] = intval(trim(fgets(STDIN)));
}

$sortedValues = sortEvenOdd($values);

foreach ($sortedValues as $value) {
    echo $value . "\n";
}

?>
