<?php

$n = readline("Enter the number of value: ");

for($i=1; $i<=$n; $i++)
{
    list($x, $y) = explode(' ', readline("Enter X and Y value: "));

    if($y==0)
    {
        echo "divisao impossivel\n";
    }
    else 
    {
        $r = $x/$y;
        $resultFormat = number_format($r, 1);
        echo "$resultFormat";
        echo "\n";
    }

}
?>

