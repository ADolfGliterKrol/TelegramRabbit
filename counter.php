<?php
// Путь к файлу счетчика
$file = 'counter.txt';

// Проверка, существует ли файл счетчика, если нет - создаем
if (!file_exists($file)) {
    file_put_contents($file, 0);
}

// Чтение текущего значения счетчика
$counter = (int)file_get_contents($file);

// Увеличение счетчика на 1
$counter++;

// Запись нового значения счетчика в файл
file_put_contents($file, $counter);

// Вывод значения счетчика (опционально)
echo "Количество посещений: " . $counter;
?>
