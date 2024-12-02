<?php
declare(strict_types=1);
/**
 * Выводит нечётные числа от 1 до заданного максимального значения.
 *
 * @param int $max Максимальное значение, до которого выводятся нечётные числа.
 * @return void
 */
function printOddNumbers(int $max): void {
	for ($i = 1; $i <= $max; $i += 2) {
		echo $i . "<br>"; // Вывод числа и перенос строки
	}
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Цикл for</title>
</head>
<body>
	<h1>Цикл for</h1>
	<?php
	// Вызов функции с аргументом 50
	printOddNumbers(50);
	?>
</body>
</html>