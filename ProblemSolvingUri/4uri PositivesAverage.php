<?php

$sum = 0;
$count = 0;

for ($i = 1; $i <= 6; $i++) {
    $num = readline("Number $i: ");

    if ($num > 0) {
        $sum = $sum + $num;
        
        $count++;
    }
}
$avg = ($sum/$count);
echo "$count valores positivos\n";
$formattedNum = number_format($avg, 1);
//echo number_format($avg , 1);
echo "$formattedNum";
echo "\n";
?>