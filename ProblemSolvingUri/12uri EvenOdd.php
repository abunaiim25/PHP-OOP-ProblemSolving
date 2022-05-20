<?php

$x = readline("Enter value total row: ");

for($i=1; $i<= $x; $i++)
{
    $N = readline("Enter $i value: \n");

    if($N > 0)
    {
        if($N % 2 == 0)
        {
            echo "EVEN POSITIVE\n";
        }
        else
        {
            echo "ODD POSITIVE\n";
        }
    }
    else if($N < 0)
    {
        if($N % 2 == 0)
        {
            echo "EVEN NEGATIVE\n";
        }
        else
        {
            echo "ODD NEGATIVE\n";
        }
    }
    else
    {
        echo "NULL";
    }
}
?>