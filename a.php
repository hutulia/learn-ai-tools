<?php

echo "Введіть ім'я: ";
$name = trim(fgets(STDIN));

echo "Скільки разів вивести? ";
$num = (int) trim(fgets(STDIN));

for ($i = 0; $i < $num; $i++) {
    echo $name . PHP_EOL;
}
