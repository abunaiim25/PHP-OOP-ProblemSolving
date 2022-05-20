
<?php

$sum = 0;
for ($i = 1; $i <= 6; $i++) {
    $num = readline("Number $i: ");

    if ($num > 0) {
        $sum = $sum + 1;
    }
}

echo "$sum valores positivos\n";
