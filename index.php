<?php
function printMenu() {
    echo "1. Ввести два числа\n";
    echo "2. Сложение\n";
    echo "3. Вычитание\n";
    echo "4. Деление\n";
    echo "5. Возведение в степень\n";
}

$a = 0;
$b = 0;

function input_numbers(&$a, &$b) {
    $a = readline("Введите первое число: ");
    $b = readline("Введите второе число: ");
}

function add($a, $b) {
    echo "Результат сложения: " . ($a + $b) . "\n";
}

function subtract($a, $b) {
    echo "Результат вычитания: " . ($a - $b) . "\n";
}

function divide($a, $b) {
    echo "Результат деления: " . ($a / $b) . "\n";
}

function power($a, $b) {
    echo "Результат возведения в степень: " . pow($a, $b) . "\n";
}

while (true) {
    printMenu();
    $choice = readline("Выберите пункт меню: ");

    switch ($choice) {
        case 1:
            input_numbers($a, $b);
            break;
        case 2:
            add($a, $b);
            break;
        case 3:
            subtract($a, $b);
            break;
        case 4:
            divide($a, $b);
            break;
        case 5:
            power($a, $b);
            break;
        default:
            echo "Неверный пункт\n";
    }
}
?>