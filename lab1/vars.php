<?php
/*
ЗАДАНИЕ 1
- Создайте переменную $name и присвойте ей значение содержащее Ваше имя, например 'Иван'(обязательно в одинарных кавычках!).
- Создайте переменную $age и присвойте ей значение содержащее Ваш возраст, например 20.
*/
$name='Дарья';
$age=20;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>
	<?php
	/*
	ЗАДАНИЕ 2
	- Выведите с помощью echo фразу "Меня зовут: $name", например: 'Меня зовут: Иван'.
	- Выведите фразу "Мне $age лет", например: 'Мне 20 лет'.
	- Выведите информацию о типе переменных $name и $age.
	- Удалите переменные $name и $age.
	- Измените код так, чтобы каждая фраза начиналась с новой строки.
	- Изолируйте код PHP от HTML-разметки.
	*/
	echo "Меня зовут: $name <br>";
	echo "Мне $age лет <br>";
	// Выводим информацию о типах переменных $name и $age
	echo gettype($name). "<br>";
	echo gettype($age). "<br>";
	?> 
</body>
</html>
