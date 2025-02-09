<?php

/**
 * You are given an array of integers nums. Implement the Bubble Sort algorithm to sort nums in ascending order and return the sorted array.
 * Your implementation should optimize the algorithm by stopping early if no swaps are needed in a given iteration
 */

function execute(array $nums): array
{
  $n = count($nums);

  for ($i = 0; $i < $n - 1; $i++) {
    $swapped = false;

    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($nums[$j] > $nums[$j + 1]) {
        [$nums[$j], $nums[$j + 1]] = [$nums[$j + 1], $nums[$j]];
        $swapped = true;
      }
    }

    if (!$swapped) {
      break;
    }
  }

  return $nums;
}

echo print_r(execute([5, 2, 9, 1, 5, 6]));
