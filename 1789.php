<?php
function findFastestSlug($slugs) {
    $fastest = $slugs[0];
    foreach ($slugs as $slug) {
        if ($slug > $fastest) {
            $fastest = $slug;
        }
    }
    return $fastest;
}

$a = readline("Enter number of slugs: ");
$b = readline("Enter the slugs velocity: ");

$slugs = array_map('intval', explode(' ', $b));

$largest = findFastestSlug($b);

$speed_level = 0;

if ($largest < 10) {
    $speed_level = 1;
} elseif ($largest < 20) {
    $speed_level = 2;
} else {
    $speed_level = 3;
}

echo "$speed_level is the largest.\n";
?>
