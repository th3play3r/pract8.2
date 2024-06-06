<!DOCTYPE html>
<html>
<head>
    <title>Результати розрахунків</title>
</head>
<body>
    <h2>Результати розрахунків</h2>
    <?php
    // Отримуємо значення змінних $a та $b з адресного рядка
    $a = isset($_GET['a']) ? (int)$_GET['a'] : 0;
    $b = isset($_GET['b']) ? (int)$_GET['b'] : 0;

    // Виконуємо математичні операції
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $b != 0 ? $a / $b : "Ділення на нуль";

    // Виводимо результати
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
    ?>
</body>
</html>