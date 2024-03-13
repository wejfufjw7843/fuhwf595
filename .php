<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        echo "Результат сложения: " . $result;
        break;
    case '-':
        $result = $num1 - $num2;
        echo "Результат вычитания: " . $result;
        break;
    case '*':
        $result = $num1 * $num2;
        echo "Результат умножения: " . $result;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
            echo "Результат деления: " . $result;
        } else {
            echo "На ноль делить нельзя!";
        }
        break;
    default:
        echo "Неправильный оператор";
}
?>