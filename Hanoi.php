<?php

function hanoi(int $num, string $towerA, string $towerB, string $towerC)
{
  if ($num > 0) {
    hanoi($num - 1, $towerA, $towerC, $towerB);
    echo "MOVE {$num}: FROM {$towerA} TO {$towerB}" . PHP_EOL;
    hanoi($num - 1, $towerC, $towerB, $towerA);
  }
}

hanoi(3, 'A', 'B', 'C');
