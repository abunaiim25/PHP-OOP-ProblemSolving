<?php

$N = readline("Enter the value: ");


for($i = 2; $i <= 10000; $i= $i+1)
{
    if($i % $N == 2)
    {
        echo "$i\n";
    }
}

?>