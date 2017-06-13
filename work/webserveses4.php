<?php

$nameProduct=$_GET["nameProduct"];
$imagePr=$_GET["imagePr"];
$descraib=$_GET["descraib"];
$price=$_GET["price"];
$nalich=$_GET["nalich"];
$namePath=$_GET["namePath"];
$typeProduct=$_GET["typeProduct"];


$fp = fopen("counter.txt", "w+"); // Открываем файл в режиме записи 
$mytext = "".$nameProduct; // Исходная строка
fwrite($fp, $mytext); // Запись в файл

fclose($fp); //Закрытие файла
?>