<?php

//==========Break continue=========
for ($i = 0; $i < 10; $i++) //break
{
    if ($i == 5) {
        break;
    }
    echo "The number is: " . $i . "\n";
}
echo "\n";






for ($i = 0; $i < 5; $i++) //Continue
{
    if ($i == 3) {
        continue;
    }
    echo "The number is: " . $i . "\n";
}
echo "\n\n";

?>