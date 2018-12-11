<?php

$fileName = 'content/describe.txt';

// Возвращает дескриптор или false
$pointer = fopen($fileName, 'r');

// Чтение по строкам.
while (!feof($pointer)) {
	$textDesc .= fgets($pointer) . "<br>";
}

fclose($pointer);

echo $textDesc;

// Counter
// Проверяем, если ли файл и есть ли в нём данные
$countFile = fopen('content/counter.txt', 'a+');
$numOfPassWas = fgets($countFile);

// Если данных нет, записываем туда 0
if ($numOfPassWas === false) {
	fwrite($countFile, 0);
	$numOfPassWas = 0;
}

// Выводим
$numOfPassWas++;
echo "<h1> $numOfPassWas </h1>";
fclose($countFile);

// Прибавляем 1 и перезаписываем файл
$countFile = fopen('content/counter.txt', 'w');
fwrite($countFile, $numOfPassWas);
fclose($countFile);

/* fgets() 
 * file_get_contents()
 * fread()
 * fgetss()
 * fgetcsv()
 * fle()
 */

// Для проверки существования файла
file_exists($fileName); //true or false // Работает только на локальном сервере
// Или существование папки
id_dir('nameOfDir');

// Удаление файла с диска на сервере
unlink($fileName);

// Открывает файл, читает, закрывает файл
readfile($fileName);
// Читает, закрывает
fpassthru($file);

//считываение в массив
file($file); // Каждая строка сохраняется в отдельном элементе указанного массива

// Чтение по символам 
fgetc($file);

/* Другие фичи
 * И создание файлов
 */

// Создание временного файлв
tmpfile(); // Без параметров 

// Количество строк
count($file);

// тупой алгоритм удаления определённой строки
$fileMass = $file($fileName);
$lineToDelete = 5;

unset($fileMass[$lineToDelete]);

$file = fopen('content/file.txt', 'w');
fwrite($file, implode('', $fileMass));
fclose($file);
// Конец тупого алгоритма

/* Определение типа файла 
 * file
 * dir 
 * ink
 * fifo
 * block
 * char
 * unknown
 */
filetype($fileName); 

// Урезает файл до указанной длины
ftruncate($fileName, $length);

// Читает содержимое файла в строку 
file_get_contents($fileName);

// Удаляем теги 
fgetss($fileName, $length, $accessedTag);
// или
strip_tags($string, $accessedTag);

// Чтение csv файлов 
fgetcsv($file, $length, $separator, $limiter); // возвращает массив данных текущей строки файла


?>