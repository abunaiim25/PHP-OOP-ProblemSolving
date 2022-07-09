<?php

$x = 0;
$N = readline("Enter Number: ");

for($i=1; $i<=$N; $i++)
{
    for($j=1; $j<=3; $j++)
{
    $x++;
    echo "$x"." ";
}
echo "PUM";
echo "\n";
$x++;
}

?>