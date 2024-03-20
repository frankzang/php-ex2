<?php
function findLargest($a, $b, $c) {
    $largestAB = ($a + $b + abs($a - $b)) / 2;
    $largest = ($largestAB + $c + abs($largestAB - $c)) / 2;
    return $largest;
}

$a = readline("Enter the first value: ");
$b = readline("Enter the second value: ");
$c = readline("Enter the third value: ");

$largest = findLargest($a, $b, $c);

echo "$largest is the largest.\n";
?>
