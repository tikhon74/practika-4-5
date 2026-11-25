<?php

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    $baseDir = __DIR__ . '/src/';

    if (str_starts_with($class, $prefix)) {
        $relative = substr($class, strlen($prefix));
        $file = $baseDir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require $file;
        }
    }
});

use App\Book;
use App\Electronics;
use App\Product;

$catalog = [
    new Book('PHP для начинающих', 800),
    new Book('Паттерны проектирования', 1500),
    new Book('Чистый код', 1200),
    new Electronics('Смартфон', 30000, 10),
    new Electronics('Наушники', 5000, 5),
    new Electronics('Монитор', 15000, 8),
];

$sum = 0.0;
foreach ($catalog as $item) {
    echo $item->getInfo() . PHP_EOL;
    $sum += $item->getFinalPrice();
}

echo 'Сумма конечных цен по каталогу: ' . number_format($sum, 2, '.', ' ') . ' руб.' . PHP_EOL;
echo 'Всего создано товаров: ' . Product::getCount() . PHP_EOL;
