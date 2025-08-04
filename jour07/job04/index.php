<?php
$a = 10;
$operation = "+";
$b = 10;
function calcule($a,$operation,$b)
{
    if ($operation == "+") {
        return ($a + $b);
    } elseif ($operation == "-") {
        return ($a - $b);
    } elseif ($operation == "/") {
        return ($a / $b);
    } elseif ($operation == "%") {
        return ($a % $b);
    } 
} 
echo calcule($a,$operation,$b);
?>
