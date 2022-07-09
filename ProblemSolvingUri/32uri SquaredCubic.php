<?php

$x=1;
$N = readline("Enter Number: ");

for($i=1; $i<=$N; $i++)//row
{
    for($j=1; $j<=3; $j++)//col
{
    $x= $x*$i; //squere
    echo "$x"." ";
}
echo "\n";
$x=1;
}
?>