<?php

$countIn = 0;
$countOut = 0;

$x = readline("Enter the total number of row: ");

for($i=1;   $i<= $x;   $i++)
{
    $N = readline("Enter the value: ");

    if($N >= 10 && $N <=20)
    {
        $countIn++; 
    }
    else{
        $countOut++;
    }
}

echo "$countIn in\n";
echo "$countOut out\n";
?>