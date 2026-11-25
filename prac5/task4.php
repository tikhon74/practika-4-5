<?php

$students = [
    ['name' => 'Анна',  'grade' => 4.5],
    ['name' => 'Борис', 'grade' => 3.2],
    ['name' => 'Вера',  'grade' => 4.8],
    ['name' => 'Глеб',  'grade' => 2.9],
];

$byGrade = $students;
usort($byGrade, fn($a, $b) => $b['grade'] <=> $a['grade']);
echo "Рейтинг по оценке:" . PHP_EOL;
echo implode(PHP_EOL, array_map(fn($s) => "{$s['name']} — {$s['grade']}", $byGrade)) . PHP_EOL . PHP_EOL;

$byName = $students;
usort($byName, fn($a, $b) => strcmp($a['name'], $b['name']));
echo "По алфавиту:" . PHP_EOL;
echo implode(PHP_EOL, array_map(fn($s) => $s['name'], $byName)) . PHP_EOL . PHP_EOL;

$greaterThan = fn($limit) => fn($student) => $student['grade'] > $limit;

$good = array_filter($students, $greaterThan(4.0));
echo 'Студенты с оценкой выше 4.0: ' . implode(', ', array_map(fn($s) => $s['name'], $good)) . PHP_EOL;
echo 'Количество: ' . count($good) . PHP_EOL;
