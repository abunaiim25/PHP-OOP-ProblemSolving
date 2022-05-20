<?php

//==========string==========
echo "Hello World";
echo "\n";

echo 'Hello World Length: ' . strlen("Hello World");  //length
echo "\n";

echo 'Hello World Word Count: ' . str_word_count("Hello World");  //word_count
echo "\n";

echo 'Hello World Reverse: ' . strrev("Hello World");  //reverse
echo "\n\n";



//==========Math==========
$a = 30;
$b = -10.5;
$sum = $a + $b;

echo 'SUM = ', $sum;
echo "\n";

var_dump(is_int($a));  //type of a variable
var_dump(is_float($b));

echo ('Pi = ' . pi() . "\n"); //py

echo ("Always Posative value: " . abs(-6.7) . "\n");  //Posative value

echo ('Squere: ' . sqrt(64) . "\n"); //Squere

echo ('Round: ' . round(.64) . "\n"); //round value
echo ('Round: ' . round(.49) . "\n");

echo ("Min: " . MIN(0, 10, 16, -4) . "\n"); //min
echo ("Max: " . MAX(0, 10, 16, -4) . "\n");  //max 
echo "\n\n";



/*
#==========input==========
$x = readline('Enter a number:');
$y = readline('Enter a another number:');

$mul = $x * $y ;
echo 'Multiple = ',$mul;
echo "\n\n";
*/



//==========Constants==========
define("GREETING", "Assalamualikum! How are you??");
echo GREETING;
echo "\n\n";





?>







