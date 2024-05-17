<?php
// Имя файла для хранения счетчика
$counterFile = 'counter.txt';

// Проверяем существует ли файл, если нет - создаем его и устанавливаем начальное значение счетчика
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

// Увеличиваем значение счетчика на 1
$currentCount = (int)file_get_contents($counterFile);
$currentCount++;
file_put_contents($counterFile, $currentCount);

// Выводим количество посещений
echo "Количество посещений: $currentCount";
?>
