<?php

$sum = 0;
$x = readline("Enter X value: ");
$y = readline("Enter Y value: ");

if($x < $y)
{
    $min = $x;
    $max = $y;
}else
{
    $min = $y;
    $max = $x;
}

for($i=($min + 1); $i<$max; $i++)
{
    //echo $i;
    if($i % 2 != 0)
    {
        $sum += $i;
    }
}
echo "$sum\n";
?>