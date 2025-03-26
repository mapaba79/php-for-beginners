<?php

function bubbleSort(array $arr): array
{
    $n = count($arr);
    $swapped = true; // Flag to optimize, if no swaps in a pass, the array is sorted

    for ($i = 0; $i < $n - 1 && $swapped; $i++) {
        $swapped = false; // Reset the flag for the current pass
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Compare adjacent elements
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap them
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swapped = true; // Indicate that a swap occurred
            }
        }
        // If no two elements were swapped in the inner loop, the array is sorted
        if (!$swapped) {
            break;
        }
    }
    return $arr;
}

// Example usage:
$myArray = [5, 1, 4, 2, 8];
$sortedArray = bubbleSort($myArray);

echo "Original array: " . implode(", ", $myArray) . "\n";
echo "Sorted array: " . implode(", ", $sortedArray) . "\n";

$anotherArray = [10, -5, 0, 7, 3];
$sortedAnotherArray = bubbleSort($anotherArray);

echo "Original array: " . implode(", ", $anotherArray) . "\n";
echo "Sorted array: " . implode(", ", $sortedAnotherArray) . "\n";

?>