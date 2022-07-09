<?php

list($x, $y) = explode(' ', readline("Enter X and Y value: "));

if ($x > $y) {
    $total = 0;
    for ($i = $y; $i <= $x; $i++) {
        if ($i % 13 != 0) {
            $total = $total + $i;
        }
    }
    echo "$total";
}
else if ($y > $x) {
    $total2 = 0;
    for ($i = $x; $i <= $y; $i++) {
        if ($i % 13 != 0) {
            $total2 = $total2 + $i;
        }
    }
    echo "$total2";
}

?>