<?php

$count = 0;
for ($i = 1; $i <= 5; $i++) {
    $num = readline("Number $i: ");

    if ($num % 2 == 0) {
        $count++;
    }
}

echo "$count valores pares";
echo "\n";

?>