<?php

$max = 0;
$position = 0;

for($i = 1; $i <= 100; $i++)
{
    $n = readline("Enter the value: ");
    if($max < $n)
    {
        $max = $n;
        $position = $i;
    }
}
echo "$max\n";
echo "$position\n";

?>