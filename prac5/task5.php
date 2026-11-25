<?php

$orders = [
    ['id' => 1, 'customer' => 'Иван',  'total' => 1200, 'status' => 'done'],
    ['id' => 2, 'customer' => 'Мария', 'total' => 800,  'status' => 'new'],
    ['id' => 3, 'customer' => 'Пётр',  'total' => 3500, 'status' => 'done'],
    ['id' => 4, 'customer' => 'Анна',  'total' => 600,  'status' => 'cancelled'],
    ['id' => 5, 'customer' => 'Олег',  'total' => 2100, 'status' => 'done'],
];

$byStatus = fn(string $status) => fn($o) => $o['status'] === $status;

$done = array_filter($orders, $byStatus('done'));
$revenue = array_reduce($done, fn($sum, $o) => $sum + $o['total'], 0);
echo "Выручка по выполненным заказам: $revenue руб." . PHP_EOL . PHP_EOL;

$big = array_filter($orders, fn($o) => $o['total'] > 1000);
$bigLines = array_map(fn($o) => "Заказ №{$o['id']} — {$o['total']} руб. ({$o['customer']})", $big);
echo "Заказы свыше 1000 руб.:" . PHP_EOL;
foreach ($bigLines as $line) { 
    echo $line . PHP_EOL;
}
echo PHP_EOL;

$sorted = array_values($done);
usort($sorted, fn($a, $b) => $b['total'] <=> $a['total']);
$top = $sorted[0];
echo "Самый дорогой выполненный заказ: №{$top['id']} — {$top['total']} руб. ({$top['customer']})" . PHP_EOL . PHP_EOL;

$names = array_unique(array_map(fn($o) => $o['customer'], $orders));
echo 'Клиенты: ' . implode(', ', $names) . PHP_EOL . PHP_EOL;

echo "Статистика:" . PHP_EOL;
echo 'Всего заказов: ' . count($orders) . PHP_EOL;
echo 'Выполнено: ' . count($done) . PHP_EOL;
echo 'Отменено: ' . count(array_filter($orders, $byStatus('cancelled'))) . PHP_EOL;
echo "Сумма выручки: $revenue руб." . PHP_EOL;
