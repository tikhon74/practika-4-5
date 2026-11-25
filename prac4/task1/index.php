<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/classes/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$user = new User('Иван', 'ivan@example.com');
$p1 = new Product('Ноутбук', 55000);
$p2 = new Product('Мышь', 1500.50);
$order = new Order($user, [$p1, $p2]);

echo 'Пользователь: ' . $user->getInfo() . PHP_EOL;
echo 'Товар 1: ' . $p1->getInfo() . PHP_EOL;
echo 'Товар 2: ' . $p2->getInfo() . PHP_EOL;
echo 'Итого по заказу: ' . $order->getTotal() . ' руб.' . PHP_EOL;
