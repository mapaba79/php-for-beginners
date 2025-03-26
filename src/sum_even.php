<?php

$sum = 0;
$n = intval(readline("Enter a positive integer: "));

for ($i = 2; $i <= $n; $i += 2) {
    $sum += $i;
}

echo "Sum of even numbers from 2 to " . $n . " is " . $sum . "\n";

?>