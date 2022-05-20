<?php

$N = readline("Enter value total row: ");

for ($i = 1; $i <= $N; $i++) {
    $X = readline("Enter $i value: \n");

    if ($X == 0) {
        echo ("NULL\n");
    } else if ($X <= 0 && $X % 2 == 0) {
        printf("EVEN NEGATIVE\n");
    } else if ($X <= 0 && $X % 2 == -1) {
        printf("ODD NEGATIVE\n");
    } else if ($X >= 0 && $X % 2 == 0) {
        printf("EVEN POSITIVE\n");
    } else if ($X >= 0 && $X % 2 == 1) {
        printf("ODD POSITIVE\n");
    }
}

?>
