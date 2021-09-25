<?php

$a = 'Проверка';
$b = 100;
$c = '%';

$num = rand(1, 30);

$min = 5;
$max = 15;

$d = sprintf('Число не находится в промежутке между %d и %d', $min, $max);

if ($num >= $min && $num <= $max) {
    $d = sprintf('Число находится между %d и %d', $min, $max);
}
