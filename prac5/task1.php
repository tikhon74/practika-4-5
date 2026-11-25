<?php

$square = fn(int $n): int => $n ** 2;
$isEven = fn(int $n): bool => $n % 2 === 0;
$greet = fn(string $name): string => "Привет, $name!";
$max = fn(int $a, int $b): int => $a > $b ? $a : $b;

echo 'square(4) = ' . $square(4) . PHP_EOL;
echo 'square(9) = ' . $square(9) . PHP_EOL;

echo 'isEven(10) = ' . ($isEven(10) ? 'true' : 'false') . PHP_EOL;
echo 'isEven(7) = ' . ($isEven(7) ? 'true' : 'false') . PHP_EOL;

echo $greet('Иван') . PHP_EOL;
echo $greet('Мария') . PHP_EOL;

echo 'max(3, 8) = ' . $max(3, 8) . PHP_EOL;
echo 'max(15, 6) = ' . $max(15, 6) . PHP_EOL;

