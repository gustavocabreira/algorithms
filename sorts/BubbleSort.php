<?php

function bubbleSort(array $input): array
{
  $n = count($input);

  for ($i = 0; $i < $n - 1; $i++) {
    $swapped = false;

    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($input[$j] > $input[$j + 1]) {
        [$input[$j], $input[$j + 1]] = [$input[$j + 1], $input[$j]];
        $swapped = true;
      }
    }

    if (!$swapped) {
      break;
    }
  }

  return $input;
}

echo print_r(bubbleSort([5, 2, 9, 1, 5, 6]));
