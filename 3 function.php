<?php

//==========Function==========
function Msg() //1
{
    echo "Function: Abu naiim";
}
Msg();
echo "\n\n";


function familyName($fname, $lname) //2
{
    echo "Family Name: $fname & $lname \n";
}
familyName('Abu', 'Naiim');
familyName('Rayhan', 'Siddique');
familyName('MD', 'Naiim');
echo "\n\n";

/*
function inputName($name)//3
{
    echo "Family Name: $name \n";
}
$name1 = readline("Enter Name1: "); //input 
$name2 = readline("Enter Name2: ");
inputName($name1);
inputName($name2);
echo "\n\n";
*/


function number(int $a, int $b) //4
{
    echo $a + $b . "\n";
}
number(5, 10);
//or
function numberAdd(int $a, int $b) //5
{
    return  $a + $b;
}
echo numberAdd(5, 10);
echo "\n\n";


function SUM(float $a, float $b) //6
{
    $result = $a + $b;
    return $result;
}
echo "Result: " . SUM(5, 7) . "\n";
echo "Result: " . SUM(10, 7) . "\n";
echo "Result: " . SUM(5, 10) . "\n";
echo "\n\n";




?>