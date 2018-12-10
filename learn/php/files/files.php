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

//fgets() 
//file_get_contents()
//fread()
//fgetss()
//fgetcsv()
//fle()

?>