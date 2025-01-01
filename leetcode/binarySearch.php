<?php

$sortedArray = array_fill(0, 8000000, 1);
$sortedArray = array_merge([0, 0, 0, 0, 0], $sortedArray);

function findSearchRange(array $arr): ?array {
    $n = count($arr);
    if (empty($arr) || $arr[$n - 1] === 0) return null;
    if ($arr[0] === 1) return [0, 0];

    $bound = 1;
    while ($bound < $n && $arr[$bound] === 0) {
        $bound *= 2;
    }

    return [$bound / 2, min($bound, $n - 1)];
}

function first1Occurrence(array $arr, int $left, int $right): ?int {
    if(empty($arr) || $arr[$right] === 0) return null;
    if($arr[0] === 1) return 0;

    while($left <= $right) {
        $mid = floor(($right + $left)/2);
        if ($arr[$mid] === 1 && $arr[$mid-1] === 0) return $mid;
        elseif ($arr[$mid] === 0) $left = $mid + 1;
        else $right = $mid - 1;
    }

    return null;
}

$range = findSearchRange($sortedArray);
if ($range) {
    [$start, $end] = $range;
    echo first1Occurrence($sortedArray, $start, $end) . PHP_EOL;
} else {
    echo "No 1's in the array" . PHP_EOL;
}
