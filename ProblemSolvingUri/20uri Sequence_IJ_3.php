<?php

$a=7;
for($i=1; $i<=9; $i+=2)
{
    for($k=1, $j=$a;    $k<=3;     $j--, $k++)
{
    $a=$a+2;
    echo "I=$i J=$j";
    echo "\n";
   
}
}
