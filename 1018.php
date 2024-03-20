<?php

$value = intval(readline("Enter an integer value: "));

echo "$value\n";

$notes = array(100, 50, 20, 10, 5, 2, 1);

foreach ($notes as $note) {
    $count = intval($value / $note);
    echo "$count nota(s) de R$ $note,00\n";
    $value %= $note;
}

?>
