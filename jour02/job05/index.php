<?php
function prime($number) 
{
    for ($x = 2; $x < $number; $x++) {
        if ($number % $x == 0) {
            return false;
        }
    }
    return true;
}
for ($x = 2; $x < 1000; $x++) {
    if (prime($x)) {
        echo $x . " est un nombre premier<br>";
    }

}
?>