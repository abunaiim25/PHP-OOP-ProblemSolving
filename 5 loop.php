<?php

//==========Loop==========
for ($i = 0; $i <= 30; $i += 10) //for
{
    echo "The number is: " . $i . "\n";
}
echo "\n\n";




$j = 0;
while ($j <= 30) //while
{
    echo "The number is: " . $j . "\n";
    $j += 10;
}
echo "\n\n";




$colors = array("red", "green", "blue", "yellow"); //foreach
foreach ($colors as $value) {
    echo "$value \n";
}
echo "\n\n";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); //foreach
foreach ($age as $x => $val) {
    echo "$x = $val \n";
}
echo "\n\n";



?>