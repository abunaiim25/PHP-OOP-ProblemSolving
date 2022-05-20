<?php
$input = readline("Enter the value: ");

for($i=$input;   $i< ($input + (6*2));   $i+=2)
{
    if($input % 2 == 0)
    {
        $odd = $i + 1;
        echo "$odd\n";
    }
    else
    {
        $odd = $i;
        echo "$odd\n";
    }
}
?>