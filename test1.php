<?php

// Функція для додавання двох чисел
function add($a, $b) {
    return $a + $b;
}

// Функція для множення двох чисел
function multiply($a, $b) {
    return $a * $b;
}

// Функція для розрахунку квадратного кореня числа
function calculateSquareRoot($num) {
    if ($num >= 0) {
        return sqrt($num);
    } else {
        return "Can't calculate square root of negative number";
    }
}

// Функція для ділення двох чисел
function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        return "Can't divide by zero";
    }
}

?>
