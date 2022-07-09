<?php

$sum = 0;

$n = readline("Enter the total value: ");
for($j=1; $j<=$n; $j++ )
{
    list($x, $y) = explode(' ', readline());

    if($x > $y)
    {
        for($i=($y+1), $sum=0; $i<$x; $i++ )
        {
            if($i%2 != 0)
            {
                $sum=$sum + $i;
            }
        }
        echo "$sum\n";
    }
   

    if($x < $y)
    {
        for($i=($x+1), $sum=0; $i<$y; $i++ )
        {
            if($i%2 != 0)
            {
                 $sum=$sum + $i;
            }
        }
        echo "$sum\n";
    }
 

    if ($x == $y)
    {
         $sum = 0;
        echo "$sum\n";
    }
 
}

?>