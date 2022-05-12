<?php
//==========Array==========
$cars = array("Volvo", "BMW", "Toyota"); //1
echo "I have " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".\n";
echo "I have $cars[0], $cars[1] and $cars[2]. \n"; //or

$cars = array("Volvo", "BMW", "Toyota"); //2
echo "Cars Count: " . count($cars); //count
echo "\n\n";


$age = array("Naiim" => "22", "Rayahn" => "21", "Siddique" => "22"); //3
echo "Naiim is " . $age["Naiim"] . " years old";
echo "\n\n";


$age = array("Naiim" => "22", "Rayahn" => "21", "Siddique" => "22"); //4
foreach ($age as $x => $x_value) {
    echo "Name: " . $x . " and Age: " . $x_value . "\n";
}
echo "\n\n";



$cars = array(//5
    array("Volvo", 22, 18),
    array("BMW", 23, 19),
    array("Volvo", 24, 28)
);
echo $cars[0][0] ." in stock, ". $cars[0][1] . " and sold ". $cars[0][2] ."\n";
echo $cars[1][0] ." in stock, ". $cars[1][1] . " and sold ". $cars[1][2] ."\n";
echo $cars[2][0] ." in stock, ". $cars[2][1] . " and sold ". $cars[2][2] ."\n";
echo "\n\n";



$cars = array(//6 arry with loop
    array("Volvo", 22, 18),
    array("BMW", 23, 19),
    array("Volvo", 24, 28),
    array("Volvo", 22, 18),
    array("BMW", 23, 19),
);
for($row=0; $row<5; $row++)
{
    echo "Row Number: $row \n";
   
    for($col=0; $col<3; $col++)
    {
        echo $cars[$row][$col] ."\n";
    }
    echo "\n";
}echo "\n\n";



/*
$input = readline("Enter the total input row");//7
for($row = 1; $row <= $input; $row++)
{
    for($col = 1; $col <=3; $col++)
    {
        readline();
    }
}
*/


$numbers = array(4, 6, 2, 22, 11);// 8 ascending numerical order
sort($numbers);

$arrayLength = count($numbers);
for($i=0; $i < $arrayLength; $i++)
{
    echo $numbers[$i] ."\n";
}echo "\n\n";



$numbers = array(4, 6, 2, 22, 11);//9 descending numerical order
rsort($numbers);

$arrayLength = count($numbers);
for($i=0; $i < $arrayLength; $i++)
{
    echo $numbers[$i] ."\n";
}echo "\n\n";



$cars = array("Volvo", "BMW", "Toyota"); //10 ascending alphabetical order
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "\n";
}echo "\n\n";




$cars = array("Volvo", "BMW", "Toyota"); //11 descending numerical order
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "\n";
}echo "\n\n";
?>
