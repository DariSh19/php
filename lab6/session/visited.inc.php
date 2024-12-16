<?php
declare(strict_types=1);
/*
ЗАДАНИЕ 2
- В случае сохранения данных 
	- в массив, проверьте, существует ли он в сессии
	- в строку, преобразуйте её в массив
- Выводите в цикле список всех посещённых пользователем страниц

*/
echo "<h2>Список посещённых страниц</h2>";
if (isset($_SESSION['visitedPages']) && count($_SESSION['visitedPages']) > 0) {
    
	echo "<ol>";
    foreach ($_SESSION['visitedPages'] as $page)
        echo "<li>$page</li>";
    echo "</ol>";
	
} else
    echo "<p>Вы пока не посетили ни одну страницу :(</p>";