<?php

/**
 * You are given an array of integers nums. Implement the Bubble Sort algorithm to sort the array in ascending order, but with an additional goal: Count the number of inversions in the array.
 * An inversion is a pair of indices (i, j) such that i < j and nums[i] > nums[j]. The total number of inversions is a measure of how "unsorted" the array is.
 */

function bubbleSort(array $nums)
{
  $n = count($nums);
  $swappedCounter = 0;

  for ($i = 0; $i < $n - 1; $i++) {
    $swapped = false;

    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($nums[$j] > $nums[$j + 1]) {
        [$nums[$j], $nums[$j + 1]] = [$nums[$j + 1], $nums[$j]];
        $swapped = true;
        $swappedCounter++;
      }
    }

    if (!$swapped) {
      break;
    }
  }

  print_r($nums);
  echo "Counter: {$swappedCounter}" . PHP_EOL;
}

$nums = [5, 2, 9, 1, 5, 6];

bubbleSort($nums);
