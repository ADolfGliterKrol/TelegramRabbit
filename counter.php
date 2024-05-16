<?php
$counter_file = 'counter.txt'; // Файл для хранения счетчика

// Проверяем, существует ли файл счетчика
if (file_exists($counter_file)) {
    $count = file_get_contents($counter_file); // Получаем текущее значение счетчика
    $count++; // Увеличиваем значение счетчика
} else {
    $count = 1; // Если файл не существует, начинаем с 1
}

file_put_contents($counter_file, $count); // Записываем новое значение счетчика в файл

echo 'Количество посещений: ' . $count;
?>