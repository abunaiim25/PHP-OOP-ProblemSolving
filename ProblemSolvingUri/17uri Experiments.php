<?php

$sum1 = 0;
$sum2 = 0;
$sum3 = 0;

$n = readline("Enter the total value: ");
for($i=1; $i<=$n; $i++ )
{
   /* $val = readline();
    $type = readline();*/
    list($val, $type) = explode(' ', readline());

    if("C" == $type)
    {
        $sum1 = $sum1 + $val;
    }
    if("R" == $type)
    {
        $sum2 = $sum2 + $val;
    }
    if("S" == $type)
    {
        $sum3 = $sum3 + $val;
    }
}
$sum = $sum1 +  $sum2 +  $sum3;

$c_per = $sum1 / $sum * 100.00 ;
$r_per = $sum2 / $sum * 100.00 ;
$s_per = $sum3 / $sum * 100.00 ;
$format_c_per = number_format($c_per, 2);
$format_r_per = number_format($r_per, 2);
$format_s_per = number_format($s_per, 2);

echo "Total: $sum cobaias\n";
echo "Total de coelhos: $sum1\n";
echo "Total de ratos: $sum2\n";
echo "Total de sapos: $sum3\n";
echo "Percentual de coelhos: $format_c_per %\n";
echo "Percentual de ratos: $format_r_per %\n";
echo "Percentual de sapos: $format_s_per %\n";

?>