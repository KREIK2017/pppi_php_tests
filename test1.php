<?php
// невдалі 
// Функція для вилучення елементу з масиву за індексом
function removeElement($array, $index) {
    if (array_key_exists($index, $array)) {
        unset($array[$index]);
        return $array;
    } else {
        return "Index doesn't exist in the array";
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
