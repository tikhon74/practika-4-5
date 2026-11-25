<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$shapes = [
    new Circle(5),
    new Rectangle(4, 6),
    new Triangle(3, 4, 5),
    new Circle(1.5),
];

foreach ($shapes as $shape) {
    echo $shape->describe() . PHP_EOL;
}

try {
    $s = new Shape();
} catch (Error $e) {
    echo 'Ошибка: ' . $e->getMessage() . PHP_EOL;
}
