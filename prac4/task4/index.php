<?php

spl_autoload_register(function (string $class): void {
    $path = __DIR__ . '/' . $class . '.php';
    if (file_exists($path)) {
        require $path;
    }
});

$employees = [
    new Manager('Петров', 80000),
    new Manager('Сидорова', 1000),
    new Developer('Иванов', 100000, 3),
    new Developer('Кузнецова', 90000, 5),
    new Developer('Смирнов', 2000, 0),
];

$total = 0.0;
foreach ($employees as $employee) {
    echo $employee->getInfo() . PHP_EOL;
    $total += $employee->getTotalPayment();
}

echo 'Общая сумма выплат: ' . number_format($total, 2, '.', ' ') . ' руб.' . PHP_EOL;
echo 'Количество сотрудников: ' . Employee::getEmployeeCount() . PHP_EOL;
