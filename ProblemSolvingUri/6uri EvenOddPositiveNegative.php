<?php

$countEven = 0;
$countOdd = 0;
$countPositive  = 0;
$countNegative = 0;

for ($i = 1; $i <= 5; $i++) {
    $num = readline("Number $i: ");

    if ($num % 2 == 0) {
        $countEven++;
    }
    if($num % 2 != 0)
    {
        $countOdd++;
    }
    if($num > 0)
    {
        $countPositive++;
    }
    if($num < 0)
    {
        $countNegative++;
    }
    
}

echo "$countEven valor(es) par(es)\n";
echo "$countOdd valor(es) impar(es)\n";
echo "$countPositive valor(es) positivo(s)\n";
echo "$countNegative valor(es) negativo(s)\n";

?>