<?php

//==========If Else==========
$result = 90;

if ($result >= 80 && $result <= 100) {
    echo "Result: A+";
} else if ($result >= 75 && $result <= 79) {
    echo "Result: A";
} else {
    echo "Not Count Result";
}
echo "\n\n";



//==========switch Statement==========
$input = "/";

switch ($input) {
    case "+":
        echo "Addition";
        break;

    case "-":
        echo "Subtruction";
        break;

    case "/":
        echo "Divided";
        break;

    case "*":
        echo "Multiple";
        break;

    default:
        echo "Not found";
}
echo "\n\n";



?>