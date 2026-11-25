<?php

$discount = 0.9;

$applyDiscount = fn(float $price): float => $price * $discount;

$prices = [1000, 2500, 400];
foreach ($prices as $price) {
    echo "Цена $price -> со скидкой " . $applyDiscount($price) . PHP_EOL;
}

$discount = 0.5; 

echo 'После $discount = 0.5: ' . $applyDiscount(1000) . PHP_EOL;


$rate = 92.5;
$toRubles = fn(float $amount): float => $amount * $rate * $discount;

echo '10 у.е. в рублях: ' . $toRubles(10) . PHP_EOL;
