<?php 
declare(strict_types=1); 
 
/* 
ЗАДАНИЕ 1 
- Создаем две целочисленные переменные $cols и $rows 
- Присваиваем произвольные значения в диапазоне от 1 до 10 
*/ 
 
$cols = rand(1, 10); 
$rows = rand(1, 10); 
?> 
<!DOCTYPE html> 
<html lang="ru"> 
<head> 
 <meta charset="UTF-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Таблица умножения</title> 
 <style> 
  table { 
   border: 2px solid black; 
   border-collapse: collapse; 
  } 
 
  th, 
  td { 
   padding: 10px; 
   border: 1px solid black; 
   text-align: center; 
  } 
 
  th { 
   background-color: yellow; 
  } 
 
  .first-row, .first-column { 
   background-color: #add8e6; 
   font-weight: bold; 
  } 
 </style> 
</head> 
<body> 
 <h1>Таблица умножения</h1> 
 <table> 
  <?php 
  /* 
  ЗАДАНИЕ 2 и 3 
  - Используем циклы для отрисовки таблицы умножения 
  - Учитываем стилизацию первой строки и первого столбца 
  */ 
 
  for ($i = 0; $i <= $rows; $i++) { 
   echo "<tr>"; 
   for ($j = 0; $j <= $cols; $j++) { 
    if ($i === 0 && $j === 0) { 
     // Пустая ячейка в левом верхнем углу 
     echo "<th></th>"; 
    } elseif ($i === 0) { 
     // Первая строка - заголовки столбцов 
     echo "<th class='first-row'>" . $j . "</th>"; 
    } elseif ($j === 0) { 
     // Первый столбец - заголовки строк 
     echo "<th class='first-column'>" . $i . "</th>"; 
    } else { 
     // Обычные ячейки с произведением 
     echo "<td>" . ($i * $j) . "</td>"; 
    } 
   } 
   echo "</tr>"; 
  } 
  ?> 
 </table> 
</body> 
</html>