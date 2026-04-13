<?php

$maxFiles = 4;      // сколько всего файлов будет
$maxLines = 4;      // сколько строк в каждом файле

// 1. Определяем, в какой файл сейчас писать
$currentNum = 1;

// Проверяем все файлы по кругу и находим первый, в котором меньше 4 строк
for ($i = 1; $i <= $maxFiles; $i++) {
    $file = __DIR__ . "/log_{$i}.txt";

    $lineCount = file_exists($file) ? count(file($file)) : 0;

    if ($lineCount < $maxLines) {
        $currentNum = $i;
        break;
    }
}

// Если все 4 файла заполнены — начинаем заново с первого файла (перезаписываем)
if ($currentNum > $maxFiles) {
    $currentNum = 1;
}

$logFile = __DIR__ . "/log_{$currentNum}.txt";

// 2. Записываем новую строку
$time = date('Y-m-d H:i:s');
$logLine = $time . "\n";

file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);

echo "Записано в: log_{$currentNum}.txt";