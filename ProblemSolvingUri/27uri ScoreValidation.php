<?php

$y = 0;
$z = 0;

while(true)
{
    $x = readline();

    if($x < 0 || $x > 10)
    {
        echo "nota invalida\n";
    }
    else if($z == 0)
    {
        $y = $x;
        $z = 1;
    }
    else{
      $result = number_format( ($x+$y)/2, 2);
      echo "media = $result"; 
      echo "\n";
      break;
    }
}

?>