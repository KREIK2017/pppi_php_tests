<?php
//Вдалі

function divisionTwoNumbers($num1, $num2) {
    return $num1 / $num2;
}
function concatenateStrings($str1, $str2) {
    return $str1 . $str2;
}
//Невдалі
function factorial($num) {
    if ($num < 0) {
        return "Can't calculate factorial of a negative number";
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
function circleArea($radius) {
    return $radius * $radius * 3; // The result should be multiplied by PI, not 3
}
?>
