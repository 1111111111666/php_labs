<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Практическая работа PHP</title>
</head>
<body>

<?php
echo "========== ЗАДАНИЯ 1-6 ==========<br><br>";

// Задание 1: Дана строка 'php'. Сделайте из нее строку 'PHP'
echo "Задание 1: " . strtoupper('php') . "<br>";

// Задание 2: Дана строка 'london'. Сделайте из нее строку 'London'
echo "Задание 2: " . ucfirst('london') . "<br>";

// Задание 3: Дана строка 'London'. Сделайте из нее строку 'london'
echo "Задание 3: " . strtolower('London') . "<br>";

// Задание 4: Дана строка 'html css php'. Найдите количество символов
$str4 = 'html css php';
echo "Задание 4: Количество символов в строке '$str4' = " . strlen($str4) . "<br>";

// Задание 5: Проверка пароля (длина больше 5 и меньше 10)
$password = "mypassword123";
$len = strlen($password);
echo "Задание 5: Пароль '$password' (длина: $len) - ";
if ($len > 5 && $len < 10) {
    echo "пароль подходит<br>";
} else {
    echo "нужно придумать другой пароль<br>";
}

// Задание 6: Проверка, заканчивается ли строка на '.png'
$str6 = "image.png";
echo "Задание 6: Строка '$str6' ";
if (substr($str6, -4) == '.png') {
    echo "заканчивается на .png → да<br><br>";
} else {
    echo "не заканчивается на .png → нет<br><br>";
}

echo "========== ЗАДАНИЯ 7-11 ==========<br><br>";

// Задание 7: Заменить все точки на дефисы
$str7 = '31.12.2013';
echo "Задание 7: Было: '$str7', стало: '" . str_replace('.', '-', $str7) . "'<br>";

// Задание 8: Заменить буквы a->1, b->2, c->3
$str8 = "abc abc abc";
$replacements = ['a' => '1', 'b' => '2', 'c' => '3'];
$result8 = strtr($str8, $replacements);
echo "Задание 8: Было: '$str8', стало: '$result8'<br>";

// Задание 9: Удалить все цифры из строки
$str9 = '1a2b3c4b5d6e7f8g9h0';
$result9 = preg_replace('/[0-9]/', '', $str9);
echo "Задание 9: Было: '$str9', стало: '$result9'<br>";

// Задание 10: Позиция первой буквы 'b'
$str10 = 'abc abc abc';
$firstPos = strpos($str10, 'b');
echo "Задание 10: В строке '$str10' первая буква 'b' на позиции: $firstPos<br>";

// Задание 11: Позиция последней буквы 'b'
$str11 = 'abc abc abc';
$lastPos = strrpos($str11, 'b');
echo "Задание 11: В строке '$str11' последняя буква 'b' на позиции: $lastPos<br>";
?>

</body>
</html>