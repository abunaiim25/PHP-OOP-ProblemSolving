<?php

while (1) //infinity
{
    list($x, $y) = explode(' ', readline("Enter X and Y value: "));

        if($x < $y)
        {
               echo"Crescente\n";
        }
        else if($x > $y)
        { 
                echo "Decrescente\n";
        }
        else{
            break;
        }
    
}
?>