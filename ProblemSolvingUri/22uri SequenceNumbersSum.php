<?php

while (1) 
{
    list($x, $y) = explode(' ', readline());

    if ($x <= 0  || $y <= 0) {
       break;
    }
    else{
        $sum = 0;

        if($x < $y)
        {
            for($i=$x; $i <= $y; $i++)
            {
                echo "$i ";
                $sum = $sum + $i;
            }
            echo "Sum=$sum\n";
        }
        else if($x > $y)
        {
            for($i=$y; $i <= $x; $i++)
            {
                  echo "$i ";
                $sum = $sum + $i;
            }
            echo "Sum=$sum\n";
        }
    }
}
?>