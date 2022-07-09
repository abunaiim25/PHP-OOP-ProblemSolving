<?php

list($x, $y) = explode(' ', readline("Enter X and Y value: "));

if ($x > $y) 
{
    for ($i = $y+1; $i < $x; $i++) 
    {
        if ($i % 5 == 2 || $i % 5 == 3)
         {
            echo "$i\n";
        }
    }
}
if ($y > $x) 
{
    for ($i = $x+1; $i < $y; $i++) 
    {
        if ($i % 5 == 2 || $i % 5 == 3)
         {
            echo "$i\n";
        }
    }
}

?>