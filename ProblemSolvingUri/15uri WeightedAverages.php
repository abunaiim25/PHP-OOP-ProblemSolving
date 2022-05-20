<?php

    $N = readline("Enter the value:\n");  //i = row, j = col

    for ($i = 0; $i < $N; $i++) {
   
        $a = readline(); 
        $b = readline();
        $c = readline();
        
        //list($a, $b, $c) = explode(' ', readline());
       // fscanf(STDIN, "%d %d %d", $a, $b, $c);
/*
        $sum = ( $a*2 + $b*3 + $c*5 );
        $avg = $sum / (2+3+5);
*/
        $total =($a*2 + $b*3+ $c*5)/10;
        echo "$total\n";
    }

    ?>