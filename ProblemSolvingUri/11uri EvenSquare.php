<?php

$N = readline("Enter the value: ");

for($i = 2; $i<= $N; $i=$i+2)
{
    $square = pow($i,2);
   
   echo "$i^2 = $square\n";
}

?>