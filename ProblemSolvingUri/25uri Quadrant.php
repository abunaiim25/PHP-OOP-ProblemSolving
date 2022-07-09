<?php

while(1){
    list($x, $y) = explode(' ', readline("Enter X and Y value: "));

    if($x == 0 || $y ==0)
    {
        break;
    }
    else 
    {
        if($x > 0 && $y > 0)
        {
            echo "primeiro\n";
        }
        else if($x < 0 && $y > 0)
        {
            echo "segundo\n";
        }
        else if($x < 0 && $y < 0)
        {
            echo "terceiro\n";
        }
        else if($x > 0 && $y < 0)
        {
            echo "quarto\n";
        }
    }
}


?>