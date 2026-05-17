<?php

echo "Введіть ім'я: ";
$name = trim(fgets(STDIN));

echo "Скільки разів вивести? ";
$num = (int) trim(fgets(STDIN));

$numWidth  = strlen((string) $num);
$nameWidth = max(strlen($name), 4);
$line = '+' . str_repeat('-', $numWidth + 2) . '+' . str_repeat('-', $nameWidth + 2) . '+';

echo $line . PHP_EOL;
echo '| ' . str_pad('#', $numWidth) . ' | ' . str_pad('Name', $nameWidth) . ' |' . PHP_EOL;
echo $line . PHP_EOL;

for ($i = 1; $i <= $num; $i++) {
    echo '| ' . str_pad($i, $numWidth) . ' | ' . str_pad($name, $nameWidth) . ' |' . PHP_EOL;
}

echo $line . PHP_EOL;
