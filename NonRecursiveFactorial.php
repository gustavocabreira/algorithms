<?php

function factorial(int $num)
{
  $result = 1;

  for ($i = $num; $i >= 1; $i--) {
    $result *= $i;
  }

  return $result;
}

echo factorial(5);
