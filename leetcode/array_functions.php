<?php
// Initial array for demonstration
$array = [5, 3, 8, 2, 1, 7, 8];

// 1. array_merge() - Combines two arrays
$additionalArray = [10, 20];
$mergedArray = array_merge($array, $additionalArray);
echo "Array after array_merge(): " . implode(", ", $mergedArray) . "\n"; // Merged result
// $array remains unchanged

// 2. array_push() - Adds elements to the end of the array
array_push($array,  ...[99, 100]); // Adds 99 and 100
echo "Array after array_push(): " . implode(", ", $array) . "\n";

// 3. array_pop() - Removes the last element of the array
$poppedElement = array_pop($array); // Removes 100
echo "Popped Element: $poppedElement\n";
echo "Array after array_pop(): " . implode(", ", $array) . "\n";

// 4. array_unshift() - Adds elements to the beginning of the array
array_unshift($array, 50, 60); // Adds 50 and 60
echo "Array after array_unshift(): " . implode(", ", $array) . "\n";

// 5. array_shift() - Removes the first element of the array
$shiftedElement = array_shift($array); // Removes 50
echo "Shifted Element: $shiftedElement\n";
echo "Array after array_shift(): " . implode(", ", $array) . "\n";

// 6. array_splice() - Removes and optionally replaces a portion of the array
array_splice($array, 2, 3, [99, 88]); // Replaces 2 elements starting at index 2 with [99, 88]
echo "Array after array_splice(): " . implode(", ", $array) . "\n";

// 7. array_slice() - Extracts a portion of the array
$slicedArray = array_slice($array, 4, 2); // Extracts 2 elements starting at index 4
echo "Array after array_slice(): " . implode(", ", $slicedArray) . "\n";
// Original array remains unchanged

// 8. in_array() - Checks if a value exists in the array
$exists = in_array(99, $array) ? 'Yes' : 'No';
echo "Does 99 exist in the array? $exists\n";

// 9. array_search() - Finds the first key of a value in the array
$key = array_search(99, $array);
echo "First occurrence of 99 is at index: $key\n";

// 10. array_key_exists() - Checks if a key exists in the array
$keyExists = array_key_exists("2s", $array) ? 'Yes' : 'No';
echo "Does index 2 exist in the array? $keyExists\n";

// 11. sort() - Sorts the array in ascending order
sort($array);
echo "Array after sort(): " . implode(", ", $array) . "\n";

// 12. rsort() - Sorts the array in descending order
rsort($array);
echo "Array after rsort(): " . implode(", ", $array) . "\n";

// 13. asort() - Sorts the array by values, preserving keys
asort($array);
echo "Array after asort(): " . implode(", ", $array) . "\n";

// 14. ksort() - Sorts the array by keys
ksort($array);
echo "Array after ksort(): " . implode(", ", $array) . "\n";

// 15. array_map() - Applies a function to each element
$mappedArray = array_map(fn($x) => $x * 2, $array); // Doubles each element
echo "Array after array_map(): " . implode(", ", $mappedArray) . "\n";

// 16. array_filter() - Filters elements using a callback
$filteredArray = array_filter($array, fn($x) => $x > 5); // Keeps elements > 5
echo "Array after array_filter(): " . implode(", ", $filteredArray) . "\n";

// 17. array_reduce() - Reduces array to a single value using a callback
$sum = array_reduce($array, function($total, $x) {
    echo "total: " . $total . "\n";
    echo "x: " . $x . "\n";
    return $total + $x;
    }, 0); // Sums the elements
echo "Sum of array elements after array_reduce(): $sum\n";

// 18. count() - Counts the elements in the array
$count = count($array);
echo "Number of elements in the array: $count\n";

// 19. array_values() - Returns all the values of the array
$values = array_values($array);
echo "Array values after array_values(): " . implode(", ", $values) . "\n";

// 20. array_keys() - Returns all the keys of the array
$keys = array_keys($array);
echo "Array keys after array_keys(): " . implode(", ", $keys) . "\n";

// 21. array_unique() - Removes duplicate values
$uniqueArray = array_unique($array);
echo "Array after array_unique(): " . implode(", ", $uniqueArray) . "\n";

// 22. array_reverse() - Reverses the array
$reversedArray = array_reverse($array);
echo "Array after array_reverse(): " . implode(", ", $reversedArray) . "\n";

?>
